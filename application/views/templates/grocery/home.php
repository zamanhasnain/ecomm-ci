

<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view($sliding_cat);
$this->load->view($best_selling_items);
$this->load->view($smart_bachat);
$this->load->view($Bank_offer);
$this->load->view($buy_one_get_one);
$this->load->view($top_saver);
$this->load->view($card_category);
?>





	<script type="text/javascript">
		$(".addTocartBtn").click(function(){
			$(this).hide();
			this.nextElementSibling.style.display = "unset";
			this.nextSibling.nextElementSibling.children.qty.value = 1;
		});
		$('.count').prop('disabled', true);
		function plusItem(val){
			this.plusItem.arguments[0].previousElementSibling.valueAsNumber+=1;
		}
		function minusItem(val){
			this.minusItem.arguments[0].nextElementSibling.valueAsNumber-=1;
			if((this.minusItem.arguments[0].nextElementSibling.value) == 0){
				this.minusItem.arguments[0].parentElement.previousElementSibling.style.display = "unset";
				this.minusItem.arguments[0].parentElement.style.display = "none";
			}
		}
	</script>

	<script src="<?= base_url('templatejs/script.js') ?>"></script>  