﻿;(function($){
	$(document).ready(function() {
	    $("#owl-index").owlCarousel({

	        navigation: false, // Show next and prev buttons
	        slideSpeed: 300,
	        paginationSpeed: 400,
	        singleItem: true,
	        pagination: true,
	        autoPlay: true
	        // "singleItem:true" is a shortcut for:
	        // items : 1, 
	        // itemsDesktop : false,
	        // itemsDesktopSmall : false,
	        // itemsTablet: false,
	        // itemsMobile : false

	    });
        // Select
	    //var params = {
	    //    changedEl: "select",
	    //    visRows: 5,
        //    scrollArrows: true
	    //}
	    //cuSel(params);

	    $('select').selectBox();

	    // or with custom settings
	    $('select').selectBox({
	        mobile: true,
	        menuSpeed: 'fast'
	    });



	    $("#loginform").validate({

	        rules: {

	            login: {
	                required: true,
	                minlength: 4,
	                maxlength: 16,
	                rangelength: [6, 16]
	            },

	            tel: {
	                required: true,
	                digits : true,
	                minlength: 13,
	                maxlength: 13,
	            },
	            email: {
	                required: true,
	                email: true,
	            },
	        },

	        messages: {

	            login: {
	                required: "Это поле обязательно для заполнения",
	                minlength: "Логин должен быть минимум 6 символа",
	                maxlength: "Максимальное число символо - 16",
	            },

	            tel: {
	                required: "Это поле обязательно для заполнения",
	                digits: "Это поле должно содержать только цифры",
	                minlength: "Номер должен быть минимум из 12 символа",
	                maxlength: "Номер должен быть максимум 12 символов",
	            },
	            email: {
	                required: "Это поле обязательно для заполнения",
	                email: "Почтовый адрес введен не корректно"
	            },

	        }

	    });

	});
})(jQuery)