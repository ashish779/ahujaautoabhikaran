$('html').addClass('js').removeClass('nojs');
$(document).delegate('.btntoggle', 'click', function (e) {
    e.preventDefault();
});
$(document).ready(function (event) {
    $('#DownloadBrochure').hide();
    $('.mail').each(function () {
        $this = $(this);
        var infomail = $this.data('box-head') + "&#64;" + $this.data('box-name') + "&#46;" + $this.data('box-ext');
        label = infomail;
        if ($(this).data('box-label')) { label = $(this).data('box-label') }
        $(this).html(infomail).attr('href', 'mailto:' + $this.text()).html(label);
    });

    $('.car-details [data-toggle="slideUp"]').click(function (e) {
        e.preventDefault();
        toggle = $(this).data('target');
        $('.car-details table .variantrow').not(toggle).slideUp(100);
        $('.car-details table ' + toggle).slideDown(100);
        $('.car-details [data-toggle="slideUp"]').closest('li').removeClass('active');
        $(this).closest('li').addClass('active');
        return false;
    });
    $('[type="radio"][name="prefLoc"]').change(function () {
        val = $(this).val();
        $('.radiotoggle').addClass('hide');
        $('#' + val).removeClass('hide');
    });

    $('#toggleModels').click(function (e) {
        e.preventDefault();
        $(this).toggleClass('hidemodels');
    });

    //$('.car-details .modiTabs').on('show.bs.tab', function (e) {
    //    $(e.target.hash).find('.highlightscarousel').carousel('pause').carousel(0).carousel('cycle');
    //});
    //$('.highlightscarousel .carousel-navigation').append('<ol class="carousel-indicators"></ol>');
    //$('.highlightscarousel').each(function () {
    //    me = $(this);
    //    id = me.attr('id');
    //    me.find('.item').each(function (index) {
    //        var active = (index == 0) ? 'active' : '';
    //        template = '<li data-target="#' + id + '" class="' + active + '" data-slide-to="' + index + '"></li>'
    //        me.find('.carousel-indicators').append(template);
    //    });
    //});
    $('.carousel').each(function () {
        if ($(this).find('.item').length < 2) {
            $(this).addClass("hidenav");
        }
    });
    winresize();
    winscroll();
    hashchange(event);
    $('[name="paynowfor"]').change(function () {
        $('[id*="ddlOrderType"]').val($(this).val());
        updateLocations($(this).val())
    });

    $('[id*="ddlOrderType"]').change(function () {
        $('[name="paynowfor"][value="' + $(this).val() + '"]').click();
        updateLocations($(this).val())
        //console.log($('[id*="ddlOrderType"]').val(), $(this).val())
    });
    function updateLocations(val) {
        if (val == 'Service') {
            $('.notService').hide();
        }
        else {
            $('.notService').show();
        }
        $('[id*="ddlLocation"]').val('-1');

    }
});
function get(name) {
    if (name = (new RegExp('[?&]' + encodeURIComponent(name) + '=([^&]*)')).exec(location.search))
        return decodeURIComponent(name[1]);
}
rangeslider();
function rangeslider(range) {
    if (range) {
        var loansum, roi = parseFloat($('#roi').text()) / 12;
        var maxamount = ($('.ddvariant:eq(0)').eq(0).val() != -1 && $('.variant:eq(0)').eq(0).val() != null) ? $('.ddvariant:eq(0)').eq(0).val() : 0;
        $('.rslider').slider();
        $('.rslider').each(function () {
            id = $(this).attr('id');
            $(this).prev('.slider').addClass(id);
        });
        $('#DP.rslider').slider({ 'max': maxamount });
        $('.maxamount').text(maxamount);
        var calculations = function () {
            if (maxamount != 0) { checkmaxamount = true }
            else { checkmaxamount = false }
            loantenure = checkmaxamount ? $('#Tenure').slider('getValue') : 0;
            downpayment = checkmaxamount ? $('#DP').slider('getValue') : 0;
            loansum = checkmaxamount ? (maxamount - downpayment) : 0;
            monthlyprinciple = loansum / loantenure || 0;
            emi = checkmaxamount ? (monthlyprinciple + ((loansum * roi) / 100)) : 0;
            $('.totalyears').text(loantenure);
            $('.loansum').text(currency(loansum));
            $('.emi').text(currency(emi));
        };
        calculations();
        $('#DP').slider().on('slide', calculations);
        $('#Tenure').slider().on('slide', function () {
            calculations();
        });
    }
    $(document).ready(function () {
        var variantsclone = $('.ddvariant:eq(0)').clone();

        $('.ddcars:eq(0)').unbind('change', false).change(function () {
            car = $(this).val();
            $('.ddvariant:eq(0) option').not('[value="-1"]').remove();
            variantsclone.find('.' + car).each(function () {
                $('.ddvariant:eq(0)').append($(this)[0].outerHTML);
            });
            model = car.replace('+', '-plus').toLowerCase();
            $('#the-car').attr('src', 'images/models/' + model + '.png').removeClass('hide');
            if (range) {
                $('.slider-handle').attr('data-car', model);
            }
            if (car == -1) {
                $('.ddvariant:eq(0)').val(car);
                $('#the-car').addClass('hide');
                $('.on-road-price').stop().slideUp(500);
            }
            else {
                variant = $('.ddvariant:eq(0) .' + car).eq(0).text().replace(/\s{2,}/g, ' ');
                $('.on-road-price .CarName').text($('.ddcars:eq(0) [value="' + car + '"]').text());
                $('.on-road-price .CarVariant').text("");
            }
        });
        $('.ddvariant:eq(0)').change(function () {
            finance($(this));
        });
        function finance(me) {

            if (me.hasClass('ddcars')) {
                $('.ddvariant option').not(':first-of-type').eq(0).val();
                $('.on-road-price .CarVariant').text("");
            }
            else {
                index = me[0].selectedIndex;
                if (index == '-1') {
                    $('.ddvariant').eq(0).val(index);
                    $('.finance .on-road-price').stop().slideUp(500, function () {
                        $('.finance .on-road-price').removeAttr('style');
                    });
                }
                else {
                    //                    ShowTable(index)
                }

            }
            maxamount = $('.ddvariant').val();
            if (range) {
                $('#DP.rslider').slider({ 'max': maxamount });
            }
            $('.maxamount').text(maxamount);
        }
    });
}
function ShowTable(index) {
    $('.finance .on-road-price').stop().slideDown(500);
    if (index)
        $('.on-road-price .CarVariant').text(" - " + $('.ddvariant option').eq().text());

}
function datetime() {
    $('#datepicker  input').datetimepicker({
        format: 'dd/mm/yyyy',
        weekStart: 1,
        todayBtn: 0,
        todayHighlight: 1,
        startView: 2,
        maxView: 2,
        minView: 2,
        autoclose: true,
        daysOfWeekDisabled: [0],
        forceParse: 0,
    });
    $('#datepicker input').datetimepicker('setStartDate', moment()._d);
}
function feather() {
    var featherGroup = [];
    var options = {
        gallery: {
            fadeIn: 300,
            fadeOut: 300
        },
        openSpeed: 300,
        closeSpeed: 300
    };
    $('.feather').each(function () {
        $(this).attr('href', $(this).find('img').attr('src').replace('thumbs/', ''));
        parent = $(this).data('featherparent');
        if ($.inArray(parent, featherGroup) == -1) {
            featherGroup.push(parent);
        }
    });
    $.each(featherGroup, function (i, v) {
        $('.feather[data-featherparent="' + v + '"]').featherlightGallery(options);
    });
}
function hashchange() {
    if (location.hash && $(location.hash).hasClass('tab-pane')) {
        $('a[href=' + location.hash + ']').tab('show');
        scrollto = $('a[href=' + location.hash + ']').closest('.modiTabs').offset().top - $('#header').height() - 95;
        $('html, body').animate({ scrollTop: scrollto }, 500);
    }
}
$(window).on('hashchange', function (e) {
    hashchange();
});
$(window).load(function () {
    //$('.ddcars').trigger('change');
    $('img').attr('draggable', 'false').attr('unselectable', 'on');
    if ($('.call-script').length > 0) {
        var scripts = $('.call-script').data('script').split(',');
        $.each(scripts, function (index, value) {
            match = RegExp('[?&]callback=([^&]*)').exec(value)
            if (match) {
                callback = match[1];
            }
            $.getScript("js/" + value)
              .done(function (script, textStatus) {
                  if (match && callback == "slider") {
                      rangeslider(true);
                  }
                  if (match && callback == "datetime") {
                      datetime();
                  }
              })
              .fail(function (jqxhr, settings, exception) {
                  $("div.log").text("Triggered ajaxError handler.");
              });
        });
    }

    if ($('.feather').length > 0) { feather(); }
    if ($('.car-details').length > 0) {
        PageUrl = location.pathname;
        FileNameIndex = PageUrl.lastIndexOf("/") + 1;
        PageNameWithExt = PageUrl.substr(FileNameIndex);
        PageName = PageNameWithExt.replace('.aspx', '').replace('-plus', '+');
        $('.ddcars option').each(function () {
            if (PageName.toLowerCase() == $(this).val().toLowerCase()) {
                $('.ddcars').val($(this).val()).trigger('change');
            }
        });
    }
    $('iframe').attr('src', $('iframe').data('src')).removeAttr('data-src');
});
$(window).scroll(function () {
    winscroll();
});
$(window).resize(function () {
    winresize();
});

var scrollcheck = 0;

function winresize() {
    var desktop = ($(window).width() > 767) ? true : false;
    if (desktop) {
        $('#MainMenu > ul > li')
        .mouseover(function () {
            $(this).find('> ul').hide().stop().slideDown(500);
        })
        .mouseout(function () {
            $(this).find('> ul').stop().slideUp(500);
        });
    }
    else {
        $('#MainMenu > ul > li > ul').removeAttr('style');
    }

    $('[data-mobile-src]').each(function () {
        src = "";
        if (desktop && $(this).data('desktop-src')) {
            src = $(this).data('desktop-src')
        }
        else {
            src = $(this).data('mobile-src');
        }
        $(this).attr('src', src);

    });
}
function winscroll() {
    $('#header-wrap').height($('#header').height());
    if ($(window).scrollTop() > $('#headertop').height()) $('#header').addClass('fix');
    else $('#header').removeClass('fix');
    if ($(window).scrollTop() < scrollcheck && $(window).width() > 767) {
        $('#header').addClass('up');
        setTimeout(function () {
            $('#menu').stop().css('min-height', "52px!important");
            $('#header').stop().removeClass('up');
        }, 1000);
    }
    scrollcheck = $(window).scrollTop();
}

//$('a').click(function () {
//    url = $(this).attr('href') || "";
//    if ((url.indexOf('#') != -1 && url.indexOf('.aspx') != -1 && url.indexOf('.aspx#') == -1) || url.indexOf('.aspx#') > -1) {
//        alert('Coming Soon');
//        return false;
//    }
//});
var locationByNumber = 1;
$(document).ready(function () {
    $("input[name='ex-showroom']").on('change', function () {
        var ModelName = $("[id*=ddlCars]").val();
        var ModelID = $(".ddcars option:selected").attr('modelid');

        locationByNumber = $(this).val();
        var LocationID = locationByNumber;
        GetPriceForVariant(ModelName, ModelID, LocationID);
    });

    $("[id*=ddlCars]").on('change', function () {
        var ModelName = $(this).val();

        var ModelID = $(".ddcars option:selected").attr('modelid');
        var LocationID = locationByNumber;
        GetPriceForVariant(ModelName, ModelID, LocationID);
    });

    $("[id*=ddlVariant]").on('change', function () {
        var ModelName = $("[id*=ddlCars]").val();
        var ModelID = $(".ddcars option:selected").attr('modelid');
        var LocationID = locationByNumber;
        var Color = $(".ddvariant option:selected").attr('color');
        var VariantID = $(".ddvariant option:selected").attr('variantid');
        if (ModelName != '-1' && VariantID != '-1' && ModelName != '' && typeof VariantID !== 'undefined') {
            var param = { ModelID: ModelID, LocationID: LocationID, Color: Color, VariantID: VariantID };
            $.ajax({
                url: "WebMethods.asmx/GetPriceDetails",
                data: JSON.stringify(param),
                dataType: "json",
                type: "POST",
                contentType: "application/json; charset=utf-8",
                dataFilter: function (data) { return data; },
                success: function (data) {
                    var PriceList = data.d;
                    $.each(PriceList, function (index, PriceList) {
                        if (PriceList.ExShowroom != '') {
                            $('#divExSh').show();
                            lblEXPrice.innerHTML = currency(PriceList.ExShowroom);
                            lblEXPrice1.innerHTML = currency(PriceList.ExShowroom)
                        }
                        else
                            $('#divExSh').hide();

                        if (PriceList.InsuranceIndividual != '') {
                            $('#divInsurance').show();
                            lblInsurance.innerHTML = currency(PriceList.InsuranceIndividual);
                        }
                        else
                            $('#divInsurance').hide();

                        if (PriceList.InsuranceCompany != '') {
                            $('#divInsuranceCompany').show();
                            lblInsuranceCompany.innerHTML = currency(PriceList.InsuranceCompany);
                        }
                        else
                            $('#divInsuranceCompany').hide();

                        if (PriceList.IndividualRegExpense != '') {
                            $('#divRegIndiv').show();
                            lblRegIndiv.innerHTML = currency(PriceList.IndividualRegExpense);
                        }
                        else
                            $('#divRegIndiv').hide();

                        if (PriceList.CompanyRegExpense != '') {
                            $('#divRegCompany').show();
                            lblRegCompany.innerHTML = currency(PriceList.CompanyRegExpense);
                        }
                        else
                            $('#divRegCompany').hide();

                        if (PriceList.ZeroDepInsurance != '') {
                            $('#divZeroDept').show();
                            lblZeroDept.innerHTML = currency(PriceList.ZeroDepInsurance);
                        }
                        else
                            $('#divZeroDept').hide();

                        if (PriceList.CNGKit != '') {
                            $('#divCNGKit').show();
                            lblCNGKit.innerHTML = currency(PriceList.CNGKit);
                        }
                        else
                            $('#divCNGKit').hide();

                        if (PriceList.Matts != '') {
                            $('#divMatts').show();
                            lblMatts.innerHTML = currency(PriceList.Matts);
                        }
                        else
                            $('#divMatts').hide();

                        if (PriceList.RubberKit != '') {
                            $('#divRubberKit').show();
                            lblRubberKit.innerHTML = currency(PriceList.RubberKit);
                        }
                        else
                            $('#divRubberKit').hide();

                        if (PriceList.OptionalYearWarranty != '') {
                            $('#divWaranty').show();
                            lblWaranty.innerHTML = currency(PriceList.OptionalYearWarranty);
                        }
                        else
                            $('#divWaranty').hide();

                        if (PriceList.FinalIndividualPrice != '') {
                            $('#divFinalIndi').show();
                            lblfinalIndi.innerHTML = currency(PriceList.FinalIndividualPrice);
                        }
                        else
                            $('#divFinalIndi').hide();

                        if (PriceList.FinalCompanyPrice != '' && PriceList.CompanyRegExpense != '') {
                            $('#divFinalComp').show();
                            lblfinalComp.innerHTML = currency(PriceList.FinalCompanyPrice);
                        }
                        else
                            $('#divFinalComp').hide();

                    });
                    ShowTable();
                },
                error: function (XMLHttpRequest, textStatus, errorThrown) {
                    console.log(textStatus + ': ' + errorThrown);
                }
            });
        }

    });
});

function GetPriceForVariant(ModelName, ModelID, LocationID) {
    var ddlVariant = $("#ddlVariant");
    ddlVariant.html('');
    var amount = 0;
    $(".calculatedValue").text("NA")
    ddlVariant.append($('<option></option>').val('-1').html('Select Variant').addClass(ModelName).attr('variantid', '-1').attr('color', '-1'));
    if (ModelName != '-1' && ModelName != '') {
        var param = { ModelID: ModelID, LocationID: LocationID };
        $.ajax({
            url: "WebMethods.asmx/GetVarianceName",
            data: JSON.stringify(param),
            dataType: "json",
            type: "POST",
            contentType: "application/json; charset=utf-8",
            dataFilter: function (data) { return data; },
            success: function (data) {
                var VarianceList = data.d;
                $.each(VarianceList, function (index, VarianceList) {
                    ddlVariant.append($("<option></option>").val(VarianceList.Price).html(VarianceList.VariantName).addClass(ModelName).attr('variantid', VarianceList.VariantID).attr('color', VarianceList.Color));
                    if (index == 0) {
                        amount = VarianceList.Price;
                    }
                });
                ddlVariant.val(amount).trigger('change');
                //$('#DP.rslider').slider({ 'max': amount });
                $('.maxamount').text(currency(amount));
            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {
                console.log(textStatus + ': ' + errorThrown);
            }
        });
    }
}
function currency(amount) {
    amountINT = parseFloat(amount).toFixed(2);
    amount_tens = (amountINT % 10).toFixed(2);
    amountNew = (amountINT - amount_tens) / 10;
    amount = amountNew.toString().replace(/(\d)(?=(\d{2})+(?!\d))/g, "$1,");
    return (amount.toString() + amount_tens.toString());
}

// New Common Function for 3 Forms

$(document).ready(function () {
    $("[id*=ddlModel]").on('change', function () {
        var ModelName = $(this).val();
        var ModelID = $(".ddModel option:selected").attr('modelid');
        console.log(ModelID);
        GetVariantName(ModelName, ModelID);
    });



    //$.ajax({
    //    url: 'https://graph.facebook.com/v2.3/ahujamahindra/feed?fields=full_picture,from,message,link,type,description&limit=1&access_token=477664535732582|t_MxQYRB_TO0xthDHMRSUCSEvmQ&callback=?', //Replace with your own access token
    //    dataType: 'json',
    //    success: displayFacebookFeed
    //});

    //function displayFacebookFeed(result) {
    //    $.each(result.data, function (i, item) {
    //        var username = item.from.name;
    //        var pageURL = "http://www.facebook.com/ahujamahindra";
    //        if (item.type = 'photo' && item.full_picture) {
    //            var photo = true;
    //            var photoURL = item.full_picture;
    //        }
    //        var body = item.message;
    //        if (!body && item.description && item.name && item.link) {
    //            body = "<a target=\"_blank\" href='" + item.link + "'>" + item.name + "</a><br/>" + item.description;
    //        }
    //        body = "<p>" + body + "</p>"
    //        temp = "https://graph.facebook.com/" + item.id + "/picture?type=normal";
    //        pictureTemplate = photo ? "<a target=\"_blank\" href='" + item.link + "'><img src=\"" + photoURL + "\" style='display: block;margin: 0 auto; margin-bottom: 10px;' /></a>" : "";
    //        outputTemplate = (!photo) ? body : pictureTemplate + body;
    //        if (i == 0)
    //            $("#FacebookFeed").html(outputTemplate);
    //    });
    //}

});

function GetVariantName(ModelName, ModelID) {
    var ddlVariants = $("[id*=ddlVariants]");
    ddlVariants.html('');
    var amount = 0;
    ddlVariants.append($('<option></option>').val('-1').html('Select Variant').addClass(ModelName).attr('variantid', '-1'));
    if (ModelName != '-1' && ModelName != '') {
        var param = { ModelID: ModelID };
        $.ajax({
            url: "WebMethods.asmx/GetNameOfVariance",
            data: JSON.stringify(param),
            dataType: "json",
            type: "POST",
            contentType: "application/json; charset=utf-8",
            dataFilter: function (data) { return data; },
            success: function (data) {
                var VarianceList = data.d;
                $.each(VarianceList, function (index, VarianceList) {
                    ddlVariants.append($("<option></option>").html(VarianceList.VariantName).addClass(ModelName).attr('variantid', VarianceList.VariantID));
                });
            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {
                console.log(textStatus + ': ' + errorThrown);
            }
        });
    }
}


function CalAmountPayable() {
    var param = { BillAmt: $('input[id$="txtBill"]').val(), PaymentMode: $('select[id$="ddlPaymentMode"]').val() };
    $.ajax({
        url: "WebMethods.asmx/CalAmountPayable",
        data: JSON.stringify(param),
        dataType: "json",
        type: "POST",
        contentType: "application/json; charset=utf-8",
        dataFilter: function (data) { return data; },
        success: function (data) {
            if (data.d != "") {
                $('input[id$="txtInternetAccessFee"]').val(data.d.split('^')[0]);
                $('input[id$="txtAmountPayable"]').val(data.d.split('^')[1]);
            }

        },
        error: function (XMLHttpRequest, textStatus, errorThrown) {
            console.log(textStatus + ': ' + errorThrown);
        }
    });
}

if ($('.flexslider').length) {
    var flex = [];
    $('.car-model-wrap').addClass('hide')
    $('.flexslider').each(function (index) {
        if (!$(this).attr('id')) {
            $(this).attr('id', 'flex-' + index)
        }
        $(this).wrap('<div class="flex-wrap" id="flex-wrap-' + index + '">');
        flex[$(this).attr('id')] = $(this);
    });


    var flexslider;
    $.getScript("js/jquery.flexslider-min.js", function (data, textStatus, jqxhr) {
        var script = document.createElement('link');
        script.href = "css/flexslider.css";
        script.type = "text/css";
        script.rel = "stylesheet";
        $('link[href*="mahindra.css"]').before(script);
        runflex();
    });

    function getGridSize() {
        return (window.innerWidth < 500) ? 1 :
                (window.innerWidth < 767) ? 2 :
                (window.innerWidth < 992) ? 3 : 4;
    }

    var runflex = function (id) {
        if ($('#GalleryCarouselThumbs').length && $('#GalleryCarousel').length) {
            $('#GalleryCarouselThumbs').flexslider({
                animation: "slide",
                controlNav: true,
                animationLoop: true,
                slideshow: false,
                itemWidth: 210,
                itemMargin: 15,
                minItems: 2,
                maxItems: 4,
                asNavFor: '#GalleryCarousel'
            });

            $('#GalleryCarousel').flexslider({
                animation: "slide",
                controlNav: true,
                animationLoop: true,
                slideshow: false,
                sync: "#GalleryCarouselThumbs"
            });

            $('.highlightscarousel:not(:visible)').css('opacity', ' 0');
            var highlightheight = 0;
            function showHighlightFlex() {
                var highlight = $('.highlightscarousel:visible');
                highlight.flexslider({
                    animation: "slide",
                    animationLoop: true,
                    itemWidth: 350,
                    pauseOnHover: true,
                    move: 1,
                    itemMargin: 15,
                    minItems: 1,
                    maxItems: 3
                }).addClass('flexedIt').animate({ 'opacity': 1 }, 500).queue(function () {

                    highlight.closest('.ModiContent').css({ "height": highlight.height(), 'transition': "0.3s all" })
                    if ($('.highlightscarousel.flexedIt').length != $('.highlightscarousel').length) {
                        highlightheight = highlight.height() > highlightheight ? highlight.height() : highlightheight;
                    }
                    else {
                        highlight.closest('.ModiContent').css({ "height": highlightheight })
                    }
                });

            }

            $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
                showHighlightFlex();
            })
            if ($('.highlightscarousel:visible').length) {
                showHighlightFlex();
            }
        }
    }
}