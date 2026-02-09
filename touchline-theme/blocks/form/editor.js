( function ( blocks, blockEditor, element, components, serverSideRender ) {
  const el = element.createElement;
  const InspectorControls = blockEditor.InspectorControls;
  const PanelBody = components.PanelBody;
  const SelectControl = components.SelectControl;
  const ToggleControl = components.ToggleControl;
  const TextControl = components.TextControl;

  blocks.registerBlockType( 'touchline/form', {
    edit: function ( props ) {
      const attributes = props.attributes;
      const setAttributes = props.setAttributes;

      return [
        el( InspectorControls, {},
          el( PanelBody, { title: 'Form Settings' },
            el( SelectControl, {
              label: 'Variant',
              value: attributes.variant,
              options: [
                { label: 'Demo', value: 'demo' },
                { label: 'Contact', value: 'contact' },
                { label: 'Waitlist', value: 'waitlist' },
                { label: 'Download', value: 'download' }
              ],
              onChange: function ( value ) {
                setAttributes( { variant: value } );
              }
            } ),
            el( ToggleControl, {
              label: 'Show heading',
              checked: attributes.showHeading,
              onChange: function ( value ) {
                setAttributes( { showHeading: value } );
              }
            } ),
            el( ToggleControl, {
              label: 'Show subheading',
              checked: attributes.showSubheading,
              onChange: function ( value ) {
                setAttributes( { showSubheading: value } );
              }
            } ),
            el( TextControl, {
              label: 'Submit label',
              value: attributes.submitLabel,
              onChange: function ( value ) {
                setAttributes( { submitLabel: value } );
              }
            } )
          )
        ),
        el( serverSideRender, {
          block: 'touchline/form',
          attributes: attributes
        } )
      ];
    },
    save: function () {
      return null;
    }
  } );
} )( window.wp.blocks, window.wp.blockEditor, window.wp.element, window.wp.components, window.wp.serverSideRender );
