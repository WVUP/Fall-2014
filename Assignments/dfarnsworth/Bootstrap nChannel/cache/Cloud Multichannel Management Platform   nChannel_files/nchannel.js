jQuery(function($) { 
    $('#dl-menu').dlmenu();
    if ($('#dropdown-wrap select').length > 0 || $('#partner-tabs-select').length > 0 || $('#thegravity-form').length > 0) {
        $('select').selectric();
    }


    $('.tab-buttons span').on('click', function() {
        var $this = $(this),
            siblings = $this.siblings('span'),
            target_tab = '#' + $this.data("tab"),
            sibling_tabs = $(target_tab).siblings();

        if (!$this.hasClass('active')) {
            $(sibling_tabs).removeClass('active');
            $(siblings).removeClass('active');
            $(target_tab).addClass('active');
            $this.addClass('active');
        }
    });
    // Modal Templates
    var modal = $('#modal-tpl').html(),
        youtube = $('#youtube-modal').html(),
        vimeo = $('#vimeo-modal').html();

    $('.vid-modal-btn').on('click', function() {
        var modal_inner_youtube = modal.replace('{{ content }}', youtube.replace('{{ id }}', $(this).data("id"))),
            modal_inner_vimeo = modal.replace('{{ content }}', vimeo.replace('{{ id }}', $(this).data("id"))),
            $this = $(this);

        if ($this.hasClass('youtube')) {
            $('body').append( modal_inner_youtube );
            $("#modal").fitVids();
        } else if ($this.hasClass('vimeo')) {
            $('body').append( modal_inner_vimeo );
            $("#modal").fitVids();
        }


        //Center Modal
        var $themodal = $('#modal'),
            page_pos =  document.documentElement.scrollTop || document.body.scrollTop;

        if ($themodal.length > 0) {
            $themodal.css({
                top : page_pos + ($(window).height() / 2) - ($themodal.outerHeight() / 2)
            });
            $(window).resize(function() {
                $themodal.css({
                    top : page_pos + ($(window).height() / 2) - ($themodal.outerHeight() / 2)
                });
            });
        }

        //Close Modal
        function close() {
            $(document).off('keyup');
            $('#modal').remove();
            $('#modal-back').remove();
        }

        $('#modal-back').on('click', close);
        $('#exit').on('click', close);
        $(document).on('keyup', function(e) {
            if ( e.keyCode == 27 ) {
                close();
            }
        });

    });


    //Team Modals
    var modal_wrap = $('#modal-wrap').html();

    $('.icon-info-circled').on('click', function() {
        var $this = $(this),
            modal_name = '#' + $this.data("name"),
            filled_modal = modal_wrap.replace('{{ content }}', $(modal_name).html());
        
        $('body').append( filled_modal );

        //Center Modal
        var $themodal = $('#modal'),
            page_pos =  document.documentElement.scrollTop || document.body.scrollTop;

        if ($themodal.length > 0) {
            $themodal.css({
                top : page_pos + ($(window).height() / 2) - ($themodal.outerHeight() / 2)
            });
            $(window).resize(function() {
                $themodal.css({
                    top : page_pos + ($(window).height() / 2) - ($themodal.outerHeight() / 2)
                });
            });
        }

        //Close Modal
        function close() {
            $(document).off('keyup');
            $('#modal').remove();
            $('#modal-back').remove();
        }

        $('#modal-back').on('click', close);
        $('#exit').on('click', close);
        $(document).on('keyup', function(e) {
            if ( e.keyCode == 27 ) {
                close();
            }
        });
    });

    $('#support-modal').on('click', function() {
        var $this = $(this),
            modal_contact = $('#modal-contact').html();
        
        $('body').append( modal_contact );

        //Center Modal
        var $themodal = $('#modal'),
            page_pos =  document.documentElement.scrollTop || document.body.scrollTop;

        if ($themodal.length > 0) {
            $themodal.css({
                top : page_pos + ($(window).height() / 2) - ($themodal.outerHeight() / 2)
            });
            $(window).resize(function() {
                $themodal.css({
                    top : page_pos + ($(window).height() / 2) - ($themodal.outerHeight() / 2)
                });
            });
        }

        //Close Modal
        function close() {
            $(document).off('keyup');
            $('#modal').remove();
            $('#modal-back').remove();
        }

        $('#modal-back').on('click', close);
        $('#exit').on('click', close);
        $(document).on('keyup', function(e) {
            if ( e.keyCode == 27 ) {
                close();
            }
        });
        return false;
    });

    $('#screen-section .mag').on('click', function() {
        var $this = $(this),
            modal_content = $this.siblings('.larger')[0].outerHTML,
            filled_modal = modal.replace('{{ content }}', modal_content);
        
        console.log(modal_content);
        $('body').append( filled_modal );
        // console.log(modal_content);
        // console.log($(modal_content));

        //Center Modal
        var $themodal = $('#modal'),
            page_pos =  document.documentElement.scrollTop || document.body.scrollTop;

        if ($themodal.length > 0) {
            $themodal.css({
                top : page_pos + ($(window).height() / 2) - ($themodal.outerHeight() / 2)
            });
            $(window).resize(function() {
                $themodal.css({
                    top : page_pos + ($(window).height() / 2) - ($themodal.outerHeight() / 2)
                });
            });
        }

        //Close Modal
        function close() {
            $(document).off('keyup');
            $('#modal').remove();
            $('#modal-back').remove();
        }

        $('#modal-back').on('click', close);
        $('#exit').on('click', close);
        $(document).on('keyup', function(e) {
            if ( e.keyCode == 27 ) {
                close();
            }
        });
        return false;
    });

    //Custom Modals
    var custom_modal_wrap = $('#modal-custom').html();

    $('.custom-modal-btn').on('click', function() {
        var $this = $(this),
            modal_name =  $this.attr('href'),
            filled_modal = custom_modal_wrap.replace('{{ content }}', $(modal_name).html());
        
        $('body').append( filled_modal );

        //Center Modal
        var $themodal = $('#modal'),
            page_pos =  document.documentElement.scrollTop || document.body.scrollTop;

        if ($themodal.length > 0) {
            $themodal.css({
                top : page_pos + ($(window).height() / 2) - ($themodal.outerHeight() / 2)
            });
            $(window).resize(function() {
                $themodal.css({
                    top : page_pos + ($(window).height() / 2) - ($themodal.outerHeight() / 2)
                });
            });
        }

        //Close Modal
        function close() {
            $(document).off('keyup');
            $('#modal').remove();
            $('#modal-back').remove();
        }

        $('#modal-back').on('click', close);
        $('#exit').on('click', close);
        $(document).on('keyup', function(e) {
            if ( e.keyCode == 27 ) {
                close();
            }
        });
        return false;
    });

    //Videos Page featured video
    var video_container = $('#the-video-container').html(),
        youtube_content = $('#youtube-content').html(),
        vimeo_content = $('#vimeo-content').html();

    $('#video-overlay').on('click', function() {
        var youtube = video_container.replace('{{ content }}', youtube_content.replace('{{ id }}', $(this).data("id"))),
            vimeo = video_container.replace('{{ content }}', vimeo_content.replace('{{ id }}', $(this).data("id"))),
            $this = $(this);

        $this.addClass('hidden');
        if ($this.hasClass('youtube')) {
            $('#video-overlay').append( youtube );
            $("#video-container").fitVids();
        } else if ($this.hasClass('vimeo')) {
            $('#video-overlay').append( vimeo );
            $("#video-container").fitVids();
        }
    });
    $(".framed").fitVids();

    // $( '#folder-slider' ).on( 'cycle-initialized', reposition_arrows);
    // Sliders
    var $eslider = $('#eslider'),
        $folderslider = $('#folder-slider');

    $eslider.cycle({
        log: false,
        fx: 'scrollHorz',
        timeout: 0,
        slides: '> .slide',
        pager: '#side-pager'
    });
    $folderslider.cycle({
        log: false,
        fx: 'scrollHorz',
        timeout: 0,
        slides: '> .folder-wrap',
        prev: '.cycle-prev',
        next: '.cycle-next',
        autoHeight: 'container'
    });

    function reposition_arrows() {
        var position = ($('#folder-slider').outerHeight() + 80) / 2;
        $('#slide-left').css({
            bottom : ( position )
        });
        $('#slide-right').css({
            bottom : ( position )
        });
    }
    
    $( '#folder-slider' ).on( 'cycle-after', reposition_arrows);
    // $(window).on( 'resize', reposition_arrows);

    $('.selectricItems li').on('click', function() {
        var $this = $(this),
            $dropdown = $('#folder-dropdown').val();

            $('#folder-slider').cycle('goto', $dropdown);
    });

    // $('#tabnav').on('click', 'li > .item', function() {
    //     var $this = $(this),
    //         target = $this.attr('href'),
    //         $section = $('#tabnav .section'),
    //         $inner = $('#tabnav .item'),
    //         $outer = $('#desknav a');

    //     if (!$this.hasClass('active')) {
    //         $section.removeClass('open');
    //         $(target).addClass('open');
    //         $inner.removeClass('active');
    //         $this.addClass('active');
    //         $outer.siblings().removeClass('active');
    //         $('#desknav a[href="' + target + '"]').addClass('active');
    //         $('html, body').animate({
    //             scrollTop: $this.offset().top
    //         }, 500);
    //     } else {
    //         $section.removeClass('open');
    //         $inner.removeClass('active');
    //     }
    //     return false;
    // });


    // $('#desknav').on('click', 'a', function() {
    //     var $this = $(this),
    //         target = $this.attr('href'),
    //         $inner = $('#tabnav .item'),
    //         $section = $('#tabnav .section');

    //     if (!$this.hasClass('active')) {
    //         $inner.removeClass('active');
    //         $section.removeClass('open');
    //         $(target).addClass('open');
    //         $(target).siblings('a').addClass('active');
    //         $this.siblings().removeClass('active');
    //         $this.addClass('active');


    //         $('#tabnav').css({
    //             height : $('.section.open').outerHeight() + 80
    //         });
    //     }
    //     return false;
    // });

    $('#connect-tab').on('click', 'li > h3', function() {
        var $this = $(this),
            $content = $this.siblings('.content');

        if (!$this.hasClass('active')) {
            $('#connect-tab .content').removeClass('open');
            $('#connect-tab h3').removeClass('active');
            $content.removeClass('open');
            $this.addClass('active');
            $content.addClass('open');
        } else {
            $this.removeClass('active');
            $content.removeClass('open');
        }
        return false;
    });

    function selecting(el, is_option) {
        var $this = $(el),
            $all = $('#partner-tabs-nav a'),
            target = (is_option) ? $this.val() : $this.attr('href'),
            $content = $('#partner-tabs .content');

        if (!$this.hasClass('active')) {
            $content.removeClass('open');
            $all.removeClass('active');
            if (is_option) {
                $('#partner-tabs-nav a[href="' + target + '"]').addClass('active');
            } else {
                $this.addClass('active');
                $('#partner-tabs-select').val(target);
                $('#partner-tabs-select').selectric('refresh');
            }
            $(target).addClass('open');
        }
        return false;
    }

    $('#partner-tabs-nav').on('click', 'a', function() {
        selecting(this);
        return false;
    });

    $('#partner-tabs-select').on('change', function() {
        selecting(this, true);
    });

    $(window).resize(function(){
        mobile = ( $(".top-bar .nav").css("display") == "none" );

        if (mobile) {
            // $('#tabnav').addClass('auto');
            $('#plan-dropdown').on('change', function() {
                var $this = $(this),
                    this_value = $this.val();

                    $('.plan .column').addClass('hidden');
                    $('.' + this_value).removeClass('hidden');
            });

        } else {
            // $('#tabnav').removeClass('auto');
            // $('#tabnav').css({
            //     height : $('.section.open').outerHeight() + 80
            // });
            // $(window).resize(function() {
            //     $('#tabnav').css({
            //         height : $('.section.open').outerHeight() + 80
            //     });
            // });

            $('.plan .column').addClass('hidden');
            if ($('.plan .pro').hasClass('hidden')) {
                $('.plan .pro').removeClass('hidden');
            }
        }
    }).resize();

    function sticky_nav() {
        var $window = $(window),
            $stickyEl = $('.header-section');

        if ($window.scrollTop() > 30) {
            $stickyEl.addClass('sticky');
        }
        $window.scroll(function() {
            $stickyEl.toggleClass('sticky', $window.scrollTop() > 30);
        });
    }
    sticky_nav();
    // $(window).resize(function(){
    //     mobile = ( $(".smaller").css("display") == "none" );

    //     if (mobile) {
    //         $('#plan-dropdown').on('change', function() {
    //             var $this = $(this),
    //                 this_value = $this.val();

    //                 $('.plan .column').addClass('hidden');
    //                 $('.' + this_value).removeClass('hidden');
    //         });
    //     } else {
    //         $('.plan .column').addClass('hidden');
    //         if ($('.plan .pro').hasClass('hidden')) {
    //             $('.plan .pro').removeClass('hidden');
    //         }
    //     }
    // }).resize();

    // var $window = $(window),
    //     $stickyEl = $('#under'),
    //     elTop = $('#main-nav').outerHeight();

    // $(window).resize(function(){
    //     elTop = $('#main-nav').outerHeight();
    // })

    // $window.scroll(function() {
    //     $stickyEl.toggleClass('sticky', $window.scrollTop() > elTop);
    // });


    // $(window).bind("load", function() {
    //     //Center Folder Slider Nav
    //     var $thefolderslider = $('.slider-wrap'),
    //         sliderheight = $thefolderslider.outerHeight();

    //     if ($thefolderslider.length > 0) {
    //         $('#slide-left').css({
    //             top : (sliderheight - 50) / 2
    //         });
    //         $('#slide-right').css({
    //             top : (sliderheight - 50) / 2
    //         });
    //         $(window).resize(function() {
    //             $('#slide-left:before').css({
    //                 top : (sliderheight - 50) / 2
    //             });
    //             $('#slide-right:before').css({
    //                 top : (sliderheight - 50) / 2
    //             });
    //         });
    //     }
    // });

    // $(window).resize(function() {
    //     var position = ($('#folder-slider').outerHeight()) / 2;
    //     $('#slide-left').css({
    //         bottom : ( position )
    //     });
    //     $('#slide-right').css({
    //         bottom : ( position )
    //     });
    // });

    $('.share-toggle').on('click', function() {

        if ($(this).children('.share-box').hasClass('visible')) {
            $(this).children('.share-box').removeClass('visible');
        } else {
            $('.share-box').removeClass('visible');
            $(this).children('.share-box').addClass('visible');
        }
    });

    $('#searchsubmit').click(function(e) {
          if ($('#searchform').hasClass('closed')) {
                $('#searchform').removeClass('closed');
                return false;
          } else if ( $('#searchform input').val().length == 0 ) {
                $('#searchform').addClass('closed');
                return false;
          } else {
                return true;
          }
    });
    $(document).click(function(event) {
        $('#searchform').addClass('closed');
        if (!$(event.target).closest('.share-toggle').length) {
            $('.share-toggle').children('.share-box').removeClass('visible');
        }
    });

    $('#s').click(function(e) {
        return false;
    });


    var $connectors = $('#theconnectors .row');
    function equal_heights() {
        if ( $connectors.length > 0 ) {
            $connectors.each(function() {
                var $sections = $(this).find('.third'),
                    largest_height = 0;

                $sections.height('auto');

                $sections.each(function() {
                    var h = $(this).height();
                    if ( largest_height < h ) largest_height = h;
                });

                $sections.height( largest_height );
            });
        }
    }

    $(window).load(function(){
        equal_heights();
    });

    $(window).resize(function(){
        equal_heights();
    });

    $('#go-to a').click(function(){
        $('html, body').animate({
            scrollTop: $( $(this).attr('href') ).offset().top - 90
        }, 500);
        return false;
    });

    function gform_placeholder() {
        $('.gfield_required').contents().unwrap();
        $("form :input").not(':checkbox').each(function(index, elem) {
            var eId = $(elem).attr("id");
            var label = null;
            if (eId && (label = $(elem).parents("form").find("label[for="+eId+"]")).length == 1) {
                $(elem).attr("placeholder", $(label).html());
                $(label).remove();
            }
        });
    }
    jQuery(document).bind('gform_post_render', function(){
        gform_placeholder();
        $('select').selectric();
    });
    gform_placeholder();

    Modernizr.load({
        test: Modernizr.input.placeholder,
        nope: template_url + '/js/lib/jquery.placeholder.js',
        complete: function() {
            // If plugin is loaded.
            if ( $().placeholder ) {
                $('input, textarea').placeholder();
            }
        }
    });

    $('.btn.chat').click(function(e) {
      var evt = e || window.event;
        evt.stopPropagation();
    });

    function directory_select(el, is_option) {
        var $this = $(el),
            $all = $('#directory-tabs-nav a'),
            target = (is_option) ? $this.val() : $this.attr('href'),
            $content = $('#directory-tabs .the-post');

        if (!$this.hasClass('active')) {
            $content.removeClass('open');
            $all.removeClass('active');
            if (is_option) {
                $('#partner-tabs-nav a[href="' + target + '"]').addClass('active');
            } else {
                $this.addClass('active');
                $('#partner-tabs-select').val(target);
                $('#partner-tabs-select').selectric('refresh');
            }
            $(target).addClass('open');
        }
        return false;
    }

    $('#directory-tabs-nav').on('click', 'a', function() {
        directory_select(this);
        return false;
    });

    $('#contact-form-modal').on('click', function() {
        var $this = $(this),
            modal_back = $('#modal-form-back').html();
        
        $('body').append( modal_back );
        gform_placeholder();
        $('select').selectric();
        //Center Modal
        var $themodal = $('#modal-form'),
            page_pos =  document.documentElement.scrollTop || document.body.scrollTop;

        if ($themodal.length > 0) {
            $themodal.css({
                top : page_pos + ($(window).height() / 2) - ($themodal.outerHeight() / 2)
            });
            $(window).resize(function() {
                $themodal.css({
                    top : page_pos + ($(window).height() / 2) - ($themodal.outerHeight() / 2)
                });
            });
        }

        //Close Modal
        function close() {
            $(document).off('keyup');
            $('#modal-back').remove();
            $('#modal-form').remove();
        }

        $('#modal-back').on('click', close);
        $('#exit-modal').on('click', close);
        $(document).on('keyup', function(e) {
            if ( e.keyCode == 27 ) {
                close();
            }
        });
        return false;
    });

    if ($('.tablepress').length > 0) {
        $('.tablepress').wrap('<div class="table-overflow-wrap">').wrap('<div class="table-overflow">');

        var $tablepress = $('.tablepress'),
            $overflow = $('.table-overflow'),
            $overflow_wrap = $('.table-overflow-wrap');

        if ($tablepress.outerWidth() > $overflow.outerWidth()) {
            $overflow_wrap.addClass('true');
        } else {
            $overflow_wrap.removeClass('true');
        }
        $(window).resize(function(){
            if ($tablepress.outerWidth() > $overflow.outerWidth()) {
                $overflow_wrap.addClass('true');
            } else {
                $overflow_wrap.removeClass('true');
            }
        });
    }

    function filter_connectors( tag ) {
        if (!tag)
            return;

        var $boxes = $('#theconnectors').find('.third');

        $('#connectors-subnav').find('a').parent().siblings().removeClass('current_page_item');
        $('#connectors-subnav').find('a[href="' + tag + '"]').parent().addClass('current_page_item');

        $boxes.removeClass('hidden');
        $('#c-filter').find('a').removeClass('active');
        $('#c-filter').find('a[href="' + tag + '"]').addClass('active');

        if ( tag == '#all')
            return;

        $boxes.not(tag.replace('#','.')).addClass('hidden');
    }

    if ($('#theconnectors').length > 0 ) {
        filter_connectors(window.location.hash);
    }

    $('#c-filter a').click(function (e) {
        

        filter_connectors( $(this).attr('href') );
    });

    $('#connectors-subnav a').click(function (e) {
       

        $('html, body').animate({
            scrollTop: $( $('#c-filter') ).offset().top - 150
        }, 500);
        filter_connectors( $(this).attr('href') );
    });

});