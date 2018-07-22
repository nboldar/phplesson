<h1><?= $product['name'] ?></h1>
<div>
    <?= $product['description'] ?>
    <input id="qty_input" type="text" name="qty"/>
</div>
<div>
    <button data-id="<?=$product['id']?>" id="add_to_card">Добавить в корзину</button>
</div>
<script>
    $(function(){
        $("#add_to_card").on('click', function(){
           var id = $(this).data('id');
           var qty = $("#qty_input").val();
           $.ajax({
               url: "/cart/add_to_cart",
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
