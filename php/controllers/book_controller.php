<body style="margin:0px;">
<?php 
require_once('views/header.php'); 
?>
<div class="main" style="position:relative;top:100px;" >
	<div class="left" style="width:100%;border:1px solid #637466;background-color:#108709;margin-bottom:150px;">
		<?php require_once('views/left.php')?>
	</div>
	<div class='right'style="position:absolute;top:50px;"> 
	<?php
	include_once('models/books/book_model.php');
	class book_controller{
		var $model;
		public function __construct() {
			$this->model = new book_model();
		}

		public function run() {
			// print 'Product Controller';
			$action = filter_input(INPUT_GET,'action');
			$action = $action==NULL?'list':$action;

			$bookID = filter_input(INPUT_GET,'book');
			if ($bookID == Null){
				switch($action) {			
					case 'add':
						require_once('views/book_add.php');
						break;
					case 'list':	
						$books = $this->model->select();					
						require_once('views/book_list.php');
						break;
					case 'update':
						require_once('views/book_update.php');
						break;
				}
			}else{
				require_once('views/view_book.php');
			}

			
		}
	}
	?>
	</div>
</div>
</body>