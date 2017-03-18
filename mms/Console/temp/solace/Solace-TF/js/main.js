(function($) {
    "use strict"; // Start of use strict

    /* -- Client Carousel */
    if ($(".clients-carousel").length) {
        $(".clients-carousel").owlCarousel({
            loop: true,
            margin: 0,
            nav: false,
            dots: false,
            autoplay: false,
            responsive: {
                0: {
                    items: 1
                },
                500: {
                    items: 2
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 6
                }
            }
        });
    }
    if ($(".clients-carousel-1").length) {
        $(".clients-carousel-1").owlCarousel({
            loop: true,
            margin: 30,
            nav: false,
            dots: false,
            autoplay: false,
            responsive: {
                0: {
                    items: 1
                },
                500: {
                    items: 2
                },
                600: {
                    items: 2
                },
                992: {
                    items: 3
                },
                1000: {
                    items: 4
                }
            }
        });
    }

    /* - Doughnut Chart */
    if ($(".chart-section").length) {
        if ($("#chart-1").length) {
            var data = [{
                value: 61,
                color: "#000000",
                label: "Logo"
            }, {
                value: 25,
                color: "#727272",
                label: "Branding"
            }, {
                value: 14,
                color: "#cac8c8",
                label: "Print"
            }];
            var options = {
                segmentShowStroke: false,
                animateRotate: true,
                animateScale: true,
                percentageInnerCutout: 65,
                tooltipTemplate: "<%= value %>%"
            }
            var ctx = document.getElementById("myChart-1").getContext("2d");
            var myChart = new Chart(ctx).Doughnut(data, options);
            document.getElementById("js-legend-1").innerHTML = myChart.generateLegend();
        }
        if ($("#chart-2").length) {
            var data = [{
                value: 61,
                color: "#000000",
                label: "Logo"
            }, {
                value: 25,
                color: "#727272",
                label: "Branding"
            }, {
                value: 14,
                color: "#cac8c8",
                label: "Print"
            }];
            var options = {
                segmentShowStroke: false,
                animateRotate: true,
                animateScale: true,
                percentageInnerCutout: 65,
                tooltipTemplate: "<%= value %>%"
            }
            var ctx = document.getElementById("myChart-2").getContext("2d");
            var myChart = new Chart(ctx).Doughnut(data, options);
            document.getElementById("js-legend-2").innerHTML = myChart.generateLegend();
        }
        if ($("#chart-3").length) {
            var data = [{
                value: 61,
                color: "#000000",
                label: "Logo"
            }, {
                value: 25,
                color: "#727272",
                label: "Branding"
            }, {
                value: 14,
                color: "#cac8c8",
                label: "Print"
            }];
            var options = {
                segmentShowStroke: false,
                animateRotate: true,
                animateScale: true,
                percentageInnerCutout: 65,
                tooltipTemplate: "<%= value %>%"
            }
            var ctx = document.getElementById("myChart-3").getContext("2d");
            var myChart = new Chart(ctx).Doughnut(data, options);
            document.getElementById("js-legend-3").innerHTML = myChart.generateLegend();
        }
    }
    if ($(".chart-section.chart-main-bg").length) {
        if ($("#myChart-black-1").length) {
            var data = [{
                value: 61,
                color: "#000000",
                label: "Logo"
            }, {
                value: 25,
                color: "#727272",
                label: "Branding"
            }, {
                value: 14,
                color: "#cac8c8",
                label: "Print"
            }];
            var options = {
                segmentShowStroke: false,
                animateRotate: true,
                animateScale: true,
                percentageInnerCutout: 65,
                tooltipTemplate: "<%= value %>%"
            }
            var ctx = document.getElementById("myChart-black-1").getContext("2d");
            var myChart = new Chart(ctx).Doughnut(data, options);
            document.getElementById("js-legend-black-1").innerHTML = myChart.generateLegend();
        }
        if ($("#myChart-black-2").length) {
            var data = [{
                value: 61,
                color: "#000000",
                label: "Logo"
            }, {
                value: 25,
                color: "#727272",
                label: "Branding"
            }, {
                value: 14,
                color: "#cac8c8",
                label: "Print"
            }];
            var options = {
                segmentShowStroke: false,
                animateRotate: true,
                animateScale: true,
                percentageInnerCutout: 65,
                tooltipTemplate: "<%= value %>%"
            }
            var ctx = document.getElementById("myChart-black-2").getContext("2d");
            var myChart = new Chart(ctx).Doughnut(data, options);
            document.getElementById("js-legend-black-2").innerHTML = myChart.generateLegend();
        }
        if ($("#myChart-black-3").length) {
            var data = [{
                value: 61,
                color: "#000000",
                label: "Logo"
            }, {
                value: 25,
                color: "#727272",
                label: "Branding"
            }, {
                value: 14,
                color: "#cac8c8",
                label: "Print"
            }];
            var options = {
                segmentShowStroke: false,
                animateRotate: true,
                animateScale: true,
                percentageInnerCutout: 65,
                tooltipTemplate: "<%= value %>%"
            }
            var ctx = document.getElementById("myChart-black-3").getContext("2d");
            var myChart = new Chart(ctx).Doughnut(data, options);
            document.getElementById("js-legend-black-3").innerHTML = myChart.generateLegend();
        }
    }

    if ($(".chart-section.full-chart").length) {
        if ($("#fullchart-1").length) {
            var data = [{
                value: 61,
                color: "#000000",
                label: "Logo"
            }, {
                value: 25,
                color: "#727272",
                label: "Branding"
            }, {
                value: 14,
                color: "#cac8c8",
                label: "Print"
            }];
            var options = {
                segmentShowStroke: false,
                animateRotate: true,
                animateScale: true,
                percentageInnerCutout: 0
            }
            var ctx = document.getElementById("full-chart-1").getContext("2d");
            var myChart = new Chart(ctx).Doughnut(data, options);
            document.getElementById("full-js-legend-1").innerHTML = myChart.generateLegend();
        }
        if ($("#fullchart-2").length) {
            var data = [{
                value: 61,
                color: "#000000",
                label: "Logo"
            }, {
                value: 25,
                color: "#727272",
                label: "Branding"
            }, {
                value: 14,
                color: "#cac8c8",
                label: "Print"
            }];
            var options = {
                segmentShowStroke: false,
                animateRotate: true,
                animateScale: true,
                percentageInnerCutout: 0
            }
            var ctx = document.getElementById("full-chart-2").getContext("2d");
            var myChart = new Chart(ctx).Doughnut(data, options);
            document.getElementById("full-js-legend-2").innerHTML = myChart.generateLegend();
        }
        if ($("#fullchart-3").length) {
            var data = [{
                value: 61,
                color: "#000000",
                label: "Logo"
            }, {
                value: 25,
                color: "#727272",
                label: "Branding"
            }, {
                value: 14,
                color: "#cac8c8",
                label: "Print"
            }];
            var options = {
                segmentShowStroke: false,
                animateRotate: true,
                animateScale: true,
                percentageInnerCutout: 0
            }
            var ctx = document.getElementById("full-chart-3").getContext("2d");
            var myChart = new Chart(ctx).Doughnut(data, options);
            document.getElementById("full-js-legend-3").innerHTML = myChart.generateLegend();
        }
    }
    if ($(".chart-section.full-chart.chart-main-bg").length) {
        if ($("#fullchart-black-1").length) {
            var data = [{
                value: 61,
                color: "#000000",
                label: "Logo"
            }, {
                value: 25,
                color: "#727272",
                label: "Branding"
            }, {
                value: 14,
                color: "#cac8c8",
                label: "Print"
            }];
            var options = {
                segmentShowStroke: false,
                animateRotate: true,
                animateScale: true,
                percentageInnerCutout: 0
            }
            var ctx = document.getElementById("full-chart-black-1").getContext("2d");
            var myChart = new Chart(ctx).Doughnut(data, options);
            document.getElementById("full-js-legend-black-1").innerHTML = myChart.generateLegend();
        }
        if ($("#fullchart-black-2").length) {
            var data = [{
                value: 61,
                color: "#000000",
                label: "Logo"
            }, {
                value: 25,
                color: "#727272",
                label: "Branding"
            }, {
                value: 14,
                color: "#cac8c8",
                label: "Print"
            }];
            var options = {
                segmentShowStroke: false,
                animateRotate: true,
                animateScale: true,
                percentageInnerCutout: 0
            }
            var ctx = document.getElementById("full-chart-black-2").getContext("2d");
            var myChart = new Chart(ctx).Doughnut(data, options);
            document.getElementById("full-js-legend-black-2").innerHTML = myChart.generateLegend();
        }
        if ($("#fullchart-black-3").length) {
            var data = [{
                value: 61,
                color: "#000000",
                label: "Logo"
            }, {
                value: 25,
                color: "#727272",
                label: "Branding"
            }, {
                value: 14,
                color: "#cac8c8",
                label: "Print"
            }];
            var options = {
                segmentShowStroke: false,
                animateRotate: true,
                animateScale: true,
                percentageInnerCutout: 0
            }
            var ctx = document.getElementById("full-chart-black-3").getContext("2d");
            var myChart = new Chart(ctx).Doughnut(data, options);
            document.getElementById("full-js-legend-black-3").innerHTML = myChart.generateLegend();
        }
    }

    /* -- Testimonials Section */
    if ($(".testimonials-box").length) {
        $(".testimonials-box").owlCarousel({
            loop: true,
            margin: 0,
            dots: false,
            nav: true,
            autoplay: false,
            responsive: {
                0: {
                    items: 1
                },
                640: {
                    items: 2
                },
                992: {
                    items: 3
                },
                1200: {
                    items: 3
                }
            }
        })
    }

    if ($(".testimonials-box2").length) {
        $(".testimonials-box2").owlCarousel({
            loop: true,
            margin: 0,
            dots: false,
            nav: true,
            autoplay: false,
            responsive: {
                0: {
                    items: 1
                },
                640: {
                    items: 1
                },
                992: {
                    items: 1
                },
                1200: {
                    items: 1
                }
            }
        })
    }

    /* - Portfolio Section */
    var $container = $(".portfolio-list");
    $container.isotope({
        itemSelector: "li",
        gutter: 0,
        transitionDuration: "0.5s"
    });
    $("#filters a").on("click", function() {
        $('#filters a').removeClass("active");
        $(this).addClass("active");
        var selector = $(this).attr("data-filter");
        $container.isotope({
            filter: selector
        });
        return false;
    });

    /* - Search */
    if ($(".search-box").length) {
        $("#search").on("click", function() {
            $(".search-box").addClass("active")
        });
        $(".search-box span").on("click", function() {
            $(".search-box").removeClass("active")
        });
    }

    /* LightSlider */
    if ($("#portfolio-single-crousal").length) {
        $("#portfolio-single-crousal").lightSlider({
            autoWidth: true,
            slideMargin: 0,
            controls: true,
            pager: false,
            loop: true,
            onSliderLoad: function() {
                $("#portfolio-single-crousal").removeClass("cs-hidden");
            }
        });
    }

    /* -- Price Filter */
    $("#slider-range").slider({
        range: true,
        min: 1,
        max: 3000,
        values: [1, 3000],
        slide: function(event, ui) {
            $("#amount").html("$" + ui.values[0])
            $("#amount2").html("$" + ui.values[1]);
        }
    });
    $("#amount").html("$" + $("#slider-range").slider("values", 0));
    $("#amount2").html(" $" + $("#slider-range").slider("values", 1));

    /* - Quantity */
    $(".qtyplus").on("click", function(e) {
        e.preventDefault();
        var fieldName = $(this).attr('data-field');
        var currentVal = parseInt($('input[name=' + fieldName + ']').val());
        if (!isNaN(currentVal)) {
            $('input[name=' + fieldName + ']').val(currentVal + 1);
        } else {
            $(this).find('input[name=' + fieldName + ']').val(0);
        }
    });

    /* This button will decrement the value till 0 */
    $(".qtyminus").on("click", function(e) {
        e.preventDefault();
        var fieldName = $(this).attr('data-field');
        var currentVal = parseInt($('input[name=' + fieldName + ']').val());
        if (!isNaN(currentVal) && currentVal > 0) {
            $('input[name=' + fieldName + ']').val(currentVal - 1);
        } else {
            $('input[name=' + fieldName + ']').val(0);
        }
    });

    /* - Shop Category Carousel */
    if ($(".category-carousel").length) {
        $(".category-carousel").owlCarousel({
            autoplay: false,
            loop: true,
            dots: false,
            nav: true,
            responsive: {
                0: {
                    items: 1
                },
                400: {
                    items: 1
                },
                640: {
                    items: 2
                },
                1200: {
                    items: 3
                }
            },
            margin: 0,
            stagePadding: 0,
            smartSpeed: 450
        });
    }

    // Tabs
    $('.wc-tabs-wrapper, .woocommerce-tabs')
        .on('init', function() {
            $('.wc-tab, .woocommerce-tabs .panel:not(.panel .panel)').hide();

            var hash = window.location.hash;
            var url = window.location.href;
            var $tabs = $(this).find('.wc-tabs, ul.tabs').first();

            if (hash.toLowerCase().indexOf('comment-') >= 0 || hash === '#tab-reviews') {
                $tabs.find('li.reviews_tab a').trigger("click");
            } else if (url.indexOf('comment-page-') > 0 || url.indexOf('cpage=') > 0) {
                $tabs.find('li.reviews_tab a').trigger("click");
            } else {
                $tabs.find('li:first a').trigger("click");
            }
        })
        .on('click', '.wc-tabs li a, ul.tabs li a', function() {
            var $tab = $(this);
            var $tabs_wrapper = $tab.closest('.wc-tabs-wrapper, .woocommerce-tabs');
            var $tabs = $tabs_wrapper.find('.wc-tabs, ul.tabs');

            $tabs.find('li').removeClass('active');
            $tabs_wrapper.find('.wc-tab, .panel:not(.panel .panel)').hide();

            $tab.closest('li').addClass('active');
            $tabs_wrapper.find($tab.attr('href')).show();

            return false;
        })
        .trigger('init');

    $('a.woocommerce-review-link').on("click", function() {
        $('.reviews_tab a').trigger("click");
        return true;
    });

    /* Star ratings for comments */
    $('#rating').hide().before('<p class="stars"><span><a class="star-1" href="#">1</a><a class="star-2" href="#">2</a><a class="star-3" href="#">3</a><a class="star-4" href="#">4</a><a class="star-5" href="#">5</a></span></p>');

    $('body')
        .on('click', '#respond p.stars a', function() {
            var $star = $(this),
                $rating = $(this).closest('#respond').find('#rating'),
                $container = $(this).closest('.stars');

            $rating.val($star.text());
            $star.siblings('a').removeClass('active');
            $star.addClass('active');
            $container.addClass('selected');

            return false;
        })
        .on('click', '#respond #submit', function() {
            var $rating = $(this).closest('#respond').find('#rating'),
                rating = $rating.val();

            if ($rating.size() > 0 && !rating && wc_single_product_params.review_rating_required === 'yes') {
                window.alert(wc_single_product_params.i18n_required_rating_text);

                return false;
            }
        });

    /* -- Burger Menu */
    $(".burger-menu a").on("click", function() {
        $(".burger-menu-block").addClass("active");
    });
    $(".burger-menu-block span").on("click", function() {
        $(".burger-menu-block").removeClass("active");
    });

    $(".burger-menu-alt a").on("click", function() {
        $(".home4").toggleClass("active");
    });

    // Sticky Header
    $(".home2").sticky({
        topSpacing: 0
    });

    // Fixed Header
    $(window).scroll(function() {
        var value = $(this).scrollTop();
        if (value > 80)
            $("header").addClass("header-scroll");
        else
            $("header").removeClass("header-scroll");
    });

})(jQuery); // End of use strict