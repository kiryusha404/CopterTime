<div class="index3">
			
			<div class="products">
				<button onclick="localStorage.clear(); window.location.href = 'basket';" class="cleer">
					Очистить корзину
				</button>
				<script src="js/add_tovar.js"></script>
			</div>
            <script src="js/basket.js"></script>
            <div class="itogo">
				<p class="i__l__p">Итого:</p>
				<p class="i__c__p"><script>document.write(SumPrice() + " руб.");</script></p>
				<button >Оформить заказ</button>
			</div>
</div>
