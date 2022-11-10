setInterval(function time(){
    //시간 초기화
    var d = new Date();
    var hours = 24 - d.getHours();
    var min = 60 - d.getMinutes();
    var sec = 60 - d.getSeconds();
    //분이 있으면 시 반올림
    if(min =='00'){
        hours = 24 - d.getHours();
        }else{
        hours = 23 - d.getHours();
    }
    //초가 있으면 분 반올림        
    if(sec =='00'){
        min = 60 - d.getMinutes();
        }else{
        min = 59 - d.getMinutes();
    }
    //1자리수라면 0을 붙혀라
    if((hours + '').length == 1){
        hours = '0' + hours;
    }
    if((min + '').length == 1){
        min = '0' + min;
    }
    if((sec + '').length == 1){
        sec = '0' + sec;
    }
    //날짜를 표기하고 딜레이는 1초(1000)마다 바뀌도록
    jQuery('#the-final-countdown p').html
        ('<span class="t_hour">'+hours+'</span>'+
        '<span class="t_colon">:</span>'+
        '<span class="t_min">'+min+'</span>'+
        '<span class="t_colon">:</span>'+
        '<span class="t_sec">'+sec+'</span>')
    }, 1000);	