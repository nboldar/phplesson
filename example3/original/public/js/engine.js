$(document).ready(function(){
    $('.buyme').on('click', function(){
        var id_good = $(this).attr("id").substr(5);

        $.ajax({
            url: "/basket/add/",
            type: "POST",
            data:{
                id_good: id_good,
                quantity: 1
            },
            success: function(answer){
                alert("Товар добавлен в корзину!");
            }
        })
    });

    $('.remove').on('click', function(){
        var id_basket = $(this).attr("id").substr(7);

        $.ajax({
            url: "/basket/remove/",
            type: "POST",
            data:{
                id_basket: id_basket,
            },
            success: function(answer){
                alert("Товар удалён из корзины!");
            }
        })
    });
});

