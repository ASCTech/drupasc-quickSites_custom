	<?php if($breadcrumb){ ?>
	<div id="breadcrumb-filler">&nbsp;</div>
	<?php } ?>
	<div id="header-shadow">&nbsp;</div>
	<div id="main-content" class="container">
		<a id="page-content"></a>
		<?php if($right){ ?><div class="clearfix" id="sidebar-right-filler"><div class="clearfix"><?php } ?>
			<?php if($breadcrumb){ ?>
			<div id="breadcrumb"><?php print $breadcrumb ?> &gt; <?php print $title; ?></div>
			<?php } ?>
	
			<?php if($left){ ?>
				<div class="span-5" id="sidebar-left">
					<?php print $left; ?>
				</div> <!-- #sidebar -->
			<?php } ?>

			<div class="span-<?php print (24-(!!$right*8)-(!!$left*5)) . ($right?" append-1":'');?> last" id="leftcontent">
	
				<?php if($messages){ ?>
					<div id="message"><?php print $messages ?></div>
				<?php } ?>
				<?php if($tabs){ ?>
					<?php print $tabs ?>
				<?php } ?>
				<?php //if($title && (!$node->type || !in_array($node->type, $GLOBALS['no_title_node_types']))){ ?>
				<h1 id="title"><?php print $title ?></h1>
				<?php //} ?>
	
				<div class="content">
					<?php print $before_content ?>
					<?php print $content ?>
					<?php print $after_content ?>
				</div>
	
			</div><!-- #leftcontent-nostyle -->
	
			<?php if($right){ ?>
				<div class="span-7 last" id="sidebar-right">
					<?php print $right; ?>
				</div> <!-- #sidebar -->
			<?php } ?>
		<?php if($right){ ?></div></div><?php } ?>
	</div>