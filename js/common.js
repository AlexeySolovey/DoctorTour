;(function($){
	$(document).ready(function() {
	    $("#owl-index").owlCarousel({

	        navigation: false, // Show next and prev buttons
	        slideSpeed: 300,
	        paginationSpeed: 400,
	        singleItem: true,
	        pagination: true,

	        // "singleItem:true" is a shortcut for:
	        // items : 1, 
	        // itemsDesktop : false,
	        // itemsDesktopSmall : false,
	        // itemsTablet: false,
	        // itemsMobile : false

	    });

	    $(function () {
	        $.scrollUp();
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
	                required: "��� ���� ����������� ��� ����������",
	                minlength: "����� ������ ���� ������� 6 �������",
	                maxlength: "������������ ����� ������� - 16",
	            },

	            tel: {
	                required: "��� ���� ����������� ��� ����������",
	                digits: "��� ���� ������ ��������� ������ �����",
	                minlength: "����� ������ ���� ������� �� 12 �������",
	                maxlength: "����� ������ ���� �������� 12 ��������",
	            },
	            email: {
	                required: "��� ���� ����������� ��� ����������",
	            },

	        }

	    });

	});
})(jQuery)