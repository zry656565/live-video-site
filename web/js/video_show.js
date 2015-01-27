/**
 * @author: Jerry Zou
 * @email: jerry.zry@outlook.com
 */

$(function(){
    MyActiveX.OnVideoStart();

    window.onbeforeunload = function(){
        MyActiveX.OnWindowClose();
    };
});