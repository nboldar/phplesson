<?php /** @var \app\models\entities\Product $product */  ?>
<h1><?= $product->name ?></h1>
<div>
    <?= $product->description ?>
</div>
<div>
    <input id="qty_input" type="text" name="qty"/>
    <button data-id="<?=$product->id?>" id="add_to_card">Добавить в корзину</button>
</div>
<script>
    $(function(){
        $("#add_to_card").on('click', function(){
            var id = $(this).data('id');
            var qty = $("#qty_input").val();
            $.ajax({
                url: "/cart/add",
                type: "POST",
                data: {
                    id: id,
                    qty: qty
                },
                success: function(response){
                    response = JSON.parse(response);
                    if(response.success == "ok"){
                        alert(response.message);
                    }
                }
            })
        });
    });
</script>