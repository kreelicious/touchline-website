( function ( blocks, blockEditor, element, components ) {
  const el = element.createElement;
  const InnerBlocks = blockEditor.InnerBlocks;
  const InspectorControls = blockEditor.InspectorControls;
  const PanelBody = components.PanelBody;
  const ToggleControl = components.ToggleControl;
  const RangeControl = components.RangeControl;

  blocks.registerBlockType( 'touchline/testimonial-slider', {
    edit: function ( props ) {
      const attributes = props.attributes;
      const setAttributes = props.setAttributes;
      const template = [
        [ 'core/group', { className: 'touchline-slider__slide' }, [
          [ 'core/quote', { value: '“Touchline keeps our sponsorship team in sync with every partner.”' } ]
        ] ],
        [ 'core/group', { className: 'touchline-slider__slide' }, [
          [ 'core/quote', { value: '“We close deals faster because proposals stay connected to inventory.”' } ]
        ] ]
      ];

      return [
        el( InspectorControls, {},
          el( PanelBody, { title: 'Slider Settings' },
            el( ToggleControl, {
              label: 'Autoplay',
              checked: attributes.autoplay,
              onChange: function ( value ) {
                setAttributes( { autoplay: value } );
              }
            } ),
            el( ToggleControl, {
              label: 'Show dots',
              checked: attributes.showDots,
              onChange: function ( value ) {
                setAttributes( { showDots: value } );
              }
            } ),
            el( RangeControl, {
              label: 'Interval (seconds)',
              min: 3,
              max: 12,
              value: attributes.interval,
              onChange: function ( value ) {
                setAttributes( { interval: value } );
              }
            } )
          )
        ),
        el( 'div', { className: 'touchline-slider-editor' },
          el( InnerBlocks, {
            template: template,
            renderAppender: InnerBlocks.ButtonBlockAppender
          } )
        )
      ];
    },
    save: function () {
      return el( InnerBlocks.Content );
    }
  } );
} )( window.wp.blocks, window.wp.blockEditor, window.wp.element, window.wp.components );
