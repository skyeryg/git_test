$('.activation').on('click','.packup',function(){
    $(this).siblings().toggle('#block');
    $(this).toggleClass('bold');
    if( $(this).children('.replace-img').attr('src')=='../image/bottom2x.png'){
    $(this).children('.replace-img').attr('src','../image/top2x.png');
    }else{
        $(this).children('.replace-img').attr('src','../image/bottom2x.png');
    }
})
$('.index-content').on('click','.index-margin',function(){
    console.log($(this).index());
    if($(this).index()==0){
        document.location='tpl/login.html';
    }else
    if($(this).index()==1) {
        document.location='tpl/commodity.html';
    }else
    if($(this).index()==2){
        document.location='tpl/integral.html';
    }else
    if($(this).index()==3){
        document.location='tpl/indent.html';
    }else
    if($(this).index()==4){
        document.location='tpl/deliver.html';
    }else
    if($(this).index()==5){
        document.location='tpl/reimburse.html';
    }else
    if($(this).index()==6){
        document.location='tpl/ka.html';
    }
})
