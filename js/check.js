$(function () {
	 $('#form_add').submit(function(){
    	var hoten = $('#hoten').val();
    	var masv = $('#masv').val();
    	var diem = $('#diem').val();
    	alert(diem);

    	if(hoten == ""){
    		$('#hoten_error').text("Vui lòng nhập họ tên!");
    		return false;
    	}
    	else if(masv == ""){
    		$('#masv_error').text("Vui lòng nhập má sinh viên!");
    		return false;
    	}
    	else if(diem == ""){
    		$('#diem_error').text("Vui lòng nhập điểm!");
    		return false;
    	}
    });
});