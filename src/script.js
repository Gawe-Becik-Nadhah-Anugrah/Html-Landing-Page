var form = document.getElementById("form-order");
form.addEventListener("submit", function (e) {
  if ("undefined" != typeof fbq) {
    fbq("track", "AddToCart", {
      source: "loops.id",
      version: "0.16.0",
    });
  }
});
$(document).ready(function (e) {
  $("img.lazy").lazyload();
});

$(".btn-cprice").click(function (e) {
  $("html, body").animate(
    {
      scrollTop: $("#section-promo").offset().top,
    },
    "fast"
  );
  fbq("track", "ViewContent", {
    content_name: "View Package Promo",
  });
});

$(".btns-adaptasi").click(function (e) {
  $("html, body").animate(
    {
      scrollTop: $("#section-order").offset().top,
    },
    "fast"
  );
  fbq("track", "ViewContent", {
    content_name: "View Order Form Paket Adaptasi",
  });
});

$(".btns-terapi").click(function (e) {
  $("html, body").animate(
    {
      scrollTop: $("#section-order").offset().top,
    },
    "fast"
  );
  fbq("track", "ViewContent", {
    content_name: "View Order Form Paket Terapi",
  });
});

$(".btns-sembuh").click(function (e) {
  $("html, body").animate(
    {
      scrollTop: $("#section-order").offset().top,
    },
    "fast"
  );
  fbq("track", "ViewContent", {
    content_name: "View Order Form Paket Sembuh",
  });
});

$(".btn-learn").click(function (e) {
  $("html, body").animate(
    {
      scrollTop: $("#section-second").offset().top,
    },
    "fast"
  );
  fbq("track", "ViewContent", {
    content_name: "View Learn More",
  });
});
