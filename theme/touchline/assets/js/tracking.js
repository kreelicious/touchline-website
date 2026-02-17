(function () {
  function fire(name, props) {
    window.dataLayer = window.dataLayer || [];
    window.dataLayer.push({ event: name, ...props });
  }

  document.addEventListener("click", function (e) {
    const el = e.target.closest("a,button");
    if (!el) return;
    const ctaType = el.getAttribute("data-cta-type");
    if (!ctaType) return;

    fire(ctaType === "pilot" ? "pilot_cta_click" : "waitlist_cta_click", {
      cta_type: ctaType,
      source_page: el.getAttribute("data-source-page") || "unknown",
      href: el.getAttribute("href") || null
    });
  });
})();
