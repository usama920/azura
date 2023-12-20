$( function() {
	
	// Counters
	$('.counter').countUp();


	// reveal items on scroll
	function reveal(){
		var reveals = document.querySelectorAll('.reveal');
	
		for(var i = 0; i < reveals.length; i++){
	
		var windowHeight = window.innerHeight;
		var cardTop = reveals[i].getBoundingClientRect().top;
		var cardRevealPoint = 150;
		
		if(cardTop < windowHeight - cardRevealPoint){
			reveals[i].classList.add('active');
		}
		else{
			reveals[i].classList.remove('active');
		}
		}
	}
	window.addEventListener('scroll', reveal);
	reveal();


	// LOADER
	$("#global-loader").fadeOut("slow");

	// PAGE LOADING
	$(window).on("load", function(e) {
		$("#global-loader").fadeOut("slow");
	})
	
	// BACK TO TOP BUTTON
	$(window).on("scroll", function(e) {
		if ($(this).scrollTop() > 130) {
			$('#back-to-top').removeClass('animate-reverse');
			$('#back-to-top').addClass('animate');
			$('#back-to-top').fadeIn('slow');
		} else {
			$('#back-to-top').removeClass('animate');
			$('#back-to-top').addClass('animate-reverse');
			$('#back-to-top').fadeOut('slow');
		}
	});

	// PROGRESS BAR ON SCROLL
	window.addEventListener('scroll', ()=>{
		var widnowScroll = document.body.scrollTop || document.documentElement.scrollTop,
		height = document.documentElement.scrollHeight - document.documentElement.clientHeight,
		scrollAmount = (widnowScroll / height) * 100;
		document.querySelector(".progress-top-bar").style.width = scrollAmount + "%";
	})

	// Landing Side Menu
	var landingSidemenu = $(".sidemenu-landing"),
		navHeader = $(".nav-header-main.sticky"),
		body = $("body"),
		navHeight;
	
	///Create a margin top to prevent content 'jumps':
	landingSidemenu.before('<div class="prevent-top"></div>');
	function preventTop() {
		navHeight = navHeader.innerHeight();
		landingSidemenu.css({"margin-top": + navHeight + "px"});
	};
	preventTop(); //Run.
	
	// Toggle Landing Page Sidemenu
	openLandingSidemenu = ()=>{
		$(body).toggleClass("landing-sidemenu-open");
	}

	// click outside of sidemenu to close
	$('.landing-page-content').on('click touchstart', function (event) {
		event.stopPropagation();
	
		// closing of sidebar menu when clicking outside of it
		if (!$(event.target).closest('#landingMenuBtn').length) {
			var sidebarTarg = $(event.target).closest('#landingMenuBtn').length;
			if (!sidebarTarg) {
				$('body').removeClass('landing-sidemenu-open');
			}
		}
	});

	// for menu scroll
	const pageLink = document.querySelectorAll(".nav-scroll");

	pageLink.forEach((elem) => {
		elem.addEventListener("click", (e) => {
			e.preventDefault();

			let WinUrl = window.location.pathname.split('/');
			if(WinUrl[WinUrl.length - 1] == 'landing.html'){
				window.location.assign(elem.getAttribute("href"))
			}

			let headerOffset = 55;
			let elemOffsetTop = document.querySelector(elem.getAttribute("href"))
			let elementPosition = elemOffsetTop.getBoundingClientRect().top - headerOffset;
			window.scrollBy(0, elementPosition); 
			
		});
	});

	// section menu active
	function onScroll(event) {
		const sections = document.querySelectorAll(".nav-scroll");
		const scrollPos = window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop;

		sections.forEach((ele,index)=> {
			const val = ele.getAttribute("href");
			const refElement = document.querySelector(val);
			const scrollTopMinus = scrollPos + 95;
			if (
				refElement.offsetTop <= scrollTopMinus &&
				refElement.offsetTop + refElement.offsetHeight > scrollTopMinus
			) {
				ele.classList.add("active");
			}
			else {
				ele.classList.remove("active");
			}
		})
	}
	window.document.addEventListener("scroll", onScroll);
});



"use strict";
let mainContent;
(function () {
    let html = document.querySelector('html');
    mainContent = document.querySelector('.main-content');

    // theme color picker
    const dynamicPrimaryLight = document.querySelectorAll('input.color-primary-light');
    dynamicPrimaryColor(dynamicPrimaryLight);
    
    localStorageBackup();
    
    // theme dynamic background
    const dynamicBackgroundColor = document.querySelectorAll('input.color-background');
    dynamicBackground(dynamicBackgroundColor);


    /*RTL Start*/
    if (html.getAttribute('dir') === "rtl") {
        rtlFn();
    }
    /*RTL End*/

    switcherClick();
    checkOptions();

    //LTR to RTL 
    // html.setAttribute("dir" , "rtl") // for rtl version 

})();

function switcherClick() {
    let ltrBtn, rtlBtn,switchbtnDefault,switchbtnLight,switchbtnDark,switchbtnGlassy, resetBtn;
    let html = document.querySelector('html');
    ltrBtn = document.querySelector('#switchbtn-ltr');
    rtlBtn = document.querySelector('#switchbtn-rtl');
    switchbtnDefault = document.querySelector('#switchbtn-default');
    switchbtnLight = document.querySelector('#switchbtn-light-theme');
    switchbtnDark = document.querySelector('#switchbtn-dark');
    switchbtnGlassy = document.querySelector('#switchbtn-glassy-theme');
    resetBtn = document.querySelector('#resetbtn');


    /* Default Theme */
    let defaultheme = switchbtnDefault.addEventListener('click', () => {
        html.setAttribute('data-theme-color',"default");
        localStorage.setItem("zemthemecolors", 'default');
        names();
        checkOptions();
    });
    /* Default Theme */

    /* Light Theme */
    let lighttheme = switchbtnLight.addEventListener('click', () => {
        html.setAttribute('data-theme-color',"light");
        localStorage.setItem("zemthemecolors", 'light');
        localStorage.removeItem('zemBackground');
        localStorage.removeItem('zemBackground');
        document.querySelector('html').style.removeProperty('--background-rgb', localStorage.zemBackground);
        names();
        checkOptions();
    })
    /* Light Theme */

    /* Dark Theme */
    let darktheme = switchbtnDark.addEventListener('click', () => {
        html.setAttribute('data-theme-color',"dark");
        localStorage.setItem("zemthemecolors", 'dark');
        localStorage.removeItem('zemBackground');
        document.querySelector('html').style.removeProperty('--background-rgb', localStorage.zemBackground);
        names();
        checkOptions();
    })
    /* Dark Theme */

    /* Glassy Theme */
    let glassytheme = switchbtnGlassy.addEventListener('click', () => {
        html.setAttribute('data-theme-color',"glassy"); 
        localStorage.setItem("zemthemecolors", 'glassy');
        localStorage.removeItem('zemBackground');
        document.querySelector('html').style.removeProperty('--background-rgb', localStorage.zemBackground);
        names();
        checkOptions();
    })
    /* Glassy Theme */



 





    /* rtl start*/
    let rtlVar = rtlBtn.addEventListener('click', () => {
        localStorage.setItem("zemrtl", true);
        localStorage.removeItem("zemltr");

        rtlFn();
    });
    /* rtl end*/
    /* ltr start*/
    let ltrVar = ltrBtn.addEventListener('click', () => {
        //    local storage 
        localStorage.setItem("zemltr", true);
        localStorage.removeItem("zemrtl");
        ltrFn();
    });
    /* ltr end*/


}

function ltrFn() {
    let html = document.querySelector('html');
    html.setAttribute("dir", "ltr");
    let select2Cont = document.querySelectorAll(".select2-container")
    select2Cont.forEach(e => e.setAttribute("dir", "ltr"))
    document.querySelector("#style")?.setAttribute("href", "../assets/plugins/bootstrap/css/bootstrap.min.css");
    var carousel = $('.owl-carousel');
    $.each(carousel, function (index, element) {
        // element == this
        var carouselData = $(element).data('owl.carousel');
        carouselData.settings.rtl = false; //don't know if both are necessary
        carouselData.options.rtl = false;
        $(element).trigger('refresh.owl.carousel');
    });
    if (html.getAttribute('data-layout') === "horizontal") {
        checkHoriMenu();
    }
    //
    checkOptions();
}

function rtlFn() {
    let html = document.querySelector('html');
    html.setAttribute("dir", "rtl");
    let select2Cont = document.querySelectorAll(".select2-container")
    select2Cont.forEach(e => e.setAttribute("dir", "rtl"))
    document.querySelector("#style")?.setAttribute("href", "../assets/plugins/bootstrap/css/bootstrap.rtl.min.css");
    var carousel = $('.owl-carousel');
    $.each(carousel, function (index, element) {
        // element == this
        var carouselData = $(element).data('owl.carousel');
        carouselData.settings.rtl = true; //don't know if both are necessary
        carouselData.options.rtl = true;
        $(element).trigger('refresh.owl.carousel');
    });
    if (html.getAttribute('data-layout') === "horizontal") {
        checkHoriMenu();
    }
    //
    checkOptions();
}





function resetData() {

    let html = document.querySelector('html');
    $('#switchbtn-ltr').prop('checked', true);
    $('#switchbtn-fullwidth').prop('checked', true);
    $('#switchbtn-fixed').prop('checked', true);
    $('#switchbtn-defaultmenu').prop('checked', true);
    $('#switchbtn-defaultlogo').prop('checked', true);
    $('#switchbtn-default').prop('checked', true);
    html.setAttribute('data-width', 'fullwidth');
    names();
    html.setAttribute('data-theme-color',"default");
    html.setAttribute('data-position', 'fixed');
    html.setAttribute('data-logo', 'defaultlogo');
    html.setAttribute('data-layout', 'vertical');
    html.setAttribute('data-vertical-style', 'default');
    html.removeAttribute('data-menuimg');
    document.body.classList.remove('sidenav-toggled');
    verticalFn();
    ltrFn();
    localStorage.clear();
    let mainHeader = document.querySelector('.main-header');
    mainHeader.style = "";
    let appSidebar = document.querySelector('.app-sidebar');
    appSidebar.style = "";
    //
    checkOptions();
}

function checkOptions() {

   

    //RTL 
    if (localStorage.getItem('zemrtl')) {
        $('#switchbtn-rtl').prop('checked', true);
    }
    
    // themecolors 
    if (localStorage.zemthemecolors) {
        let themeColors = localStorage.getItem("zemthemecolors");
        switch (themeColors) {
            case 'default':
                $('#switchbtn-default').prop('checked', true);
                break;
            case 'light':
                $('#switchbtn-light-theme').prop('checked', true);
                $('#switchbtn-lightheader').prop('checked', true);
                $('#switchbtn-lightmenu').prop('checked', true);
                break;
            case 'dark':
                $('#switchbtn-dark').prop('checked', true);
                $('#switchbtn-darkmenu').prop('checked', true);
                $('#switchbtn-darkheader').prop('checked', true);
                break;
            case 'glassy':
                $('#switchbtn-glassy-theme').prop('checked', true);
                break;
        }
    }

   


}


const hex2rgb = (hex) => {
    const r = parseInt(hex.slice(1, 3), 16)
    const g = parseInt(hex.slice(3, 5), 16)
    const b = parseInt(hex.slice(5, 7), 16)
    // return {r, g, b} // return an object
    return [ r, g, b ]
}
function dynamicPrimaryColor(primaryColor) {
    primaryColor.forEach((item) => {
        item.addEventListener('input', (e) => {
            document.querySelector('html').style.setProperty('--primary-rgb', hex2rgb(e.target.value)) ;
        });
    });
}
function dynamicBackground(backgroundColor) {
    backgroundColor.forEach((item) => {
        item.addEventListener('input', (e) => {
            document.querySelector('html').style.setProperty('--background-rgb', hex2rgb(e.target.value)) ;
        });
    });
}

function changePrimaryColor() {
    var userColor = document.getElementById('colorID').value;
    localStorage.setItem('zemprimaryColor', hex2rgb(userColor));
    names()
}
function changeBackground() {
    var userColor1 = document.getElementById('colorID1').value;
    localStorage.setItem('zemBackground', hex2rgb(userColor1));
    names()
}




function localStorageBackup() {
    // if there is a value stored, update color picker and background color
    // Used to retrive the data from local storage
    if (localStorage.zemprimaryColor) {
        if (document.getElementById('colorID')) {
            document.getElementById('colorID').value = localStorage.zemprimaryColor;
        }
         document.querySelector('html').style.setProperty('--primary-rgb', localStorage.zemprimaryColor);
    }
    if(localStorage.zemBackground) {
        if (document.getElementById('colorID1')) {
            document.getElementById('colorID1').value = localStorage.zemBackground;
        }
         document.querySelector('html').style.setProperty('--background-rgb', localStorage.zemBackground);
    }
    if (localStorage.zemrtl) {
        let html = document.querySelector('html');
        html.setAttribute('dir', 'rtl');
    }
    if (localStorage.zemlayout) {
        let html = document.querySelector('html');
        let layoutValue = localStorage.getItem('zemlayout');
        html.setAttribute('data-layout', 'horizontal');
        switch (layoutValue) {
            case 'horizontal':
                html.setAttribute('data-hor-style', 'hor-click');
                break;
            case 'horizontalhover':
                html.setAttribute('data-hor-style', 'hor-hover');
                break;
        }
    }
    if (localStorage.zemthemecolors) {
        let html = document.querySelector('html');
        let themeColors = localStorage.getItem("zemthemecolors");
        switch (themeColors) {
            case 'default': 
            html.setAttribute('data-theme-color', 'default');
            break;
            case 'light': 
            html.setAttribute('data-theme-color', 'light');
            break;
            case 'dark': 
            html.setAttribute('data-theme-color', 'dark');
            break;
            case 'glassy': 
            html.setAttribute('data-theme-color', 'glassy');
            break;
        }
    }
    if (localStorage.zemmenubgimg) {
        let html = document.querySelector('html');
        let menubgimg = localStorage.getItem("zemmenubgimg");
        switch (menubgimg) {
            case 'bg-img1':
                html.setAttribute('data-menuimg', 'bg-img1');
                break;
            case 'bg-img2':
                html.setAttribute('data-menuimg', 'bg-img2')
                break;
            case 'bg-img3':
                html.setAttribute('data-menuimg', 'bg-img3')
                break;
            case 'bg-img4':
                html.setAttribute('data-menuimg', 'bg-img4')
                break;
        }
    }
  
}