/**
 * ready
 *
 * @author      :
 * @param       :
 * @return      :   null
 * @access      :   public
 * @see         :   init
 */


 $(document).ready(function() {
    initialize();
    initEvents();
});

/**
 * initialize
 *
 * @author      :
 * @param       :
 * @return      :   null
 * @access      :   public
 * @see         :   init
 */
 function initialize() {
 }

 /**
 * initEvents
 *
 * @author      :
 * @param       :
 * @return      :   null
 * @access      :   public
 * @see         :   init
 */
  function initEvents() {
    try {
        $('#btn-delete').on('click', function(event) {
            event.preventDefault();
            const data = {
                user_id: user_id,
            }
            Delete(data);
          });

    } catch (e) {
        console.log('initEvents: ' + e.message);
    }
}


/**
 * cancel account
 *
 * @author      :   DongNT - 06/02/2023 create
 * @param       :
 * @return      :   null
 * @access      :   public
 * @see         :
 */
function Delete(data) {
	try {
        if($('#password').val() == password) {
            $.ajax({
                type: 'POST',
                dataType: 'json',
                url: `/profile/delete/${user_id}`,
                data: data,
                success: function(res){
                    if(res.status ==  true){
                        window.Notification.Toast('Xóa tài khoản thành công');
                        window.location = '/logout';
                    }else {
                        window.Notification.Toast('Xóa tài khoản thất bại');
                    }
                }
            });
        } else {
            window.Notification.Toast('Mật khẩu không đúng');
        }
	} catch(e){
		console.log('Delete:' + e.message);
	}
}
