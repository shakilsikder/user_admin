<!DOCTYPE html>
<html lang="en">

<?php
// die($_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']);
if (basename(__DIR__) != 'admin') {
	$baseUrl = '../';
	$isInternal = true;
} else {
	$baseUrl = '';
	$isInternal = false;
}
?>

<!-- head -->
<?php include "../includes/head.php"; ?>
<!-- /head -->
<?php require "../controller/dbConfig.php" ?>

<body>

	<!-- Main navbar -->

	<?php include "../includes/mainNav.php"; ?>
	<!-- /main navbar -->


	<!-- Page container -->
	<div class="page-container">
		<!-- Page content -->
		<div class="page-content">
			<!-- Main sidebar -->
			<div class="sidebar sidebar-main">
				<div class="sidebar-content">

					<!-- User menu -->
					<div class="sidebar-user">
						<div class="category-content">
							<div class="media">
								<a href="#" class="media-left"><img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt=""></a>
								<div class="media-body">
									<span class="media-heading text-semibold">Victoria Baker</span>
									<div class="text-size-mini text-muted">
										<i class="icon-pin text-size-small"></i> &nbsp;Santa Ana, CA
									</div>
								</div>

								<div class="media-right media-middle">
									<ul class="icons-list">
										<li>
											<a href="#"><i class="icon-cog3"></i></a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!-- /user menu -->

					<!-- Main navigation -->
					<?php $page = 'designation'; include "../includes/navigation.php"; ?>
					<!-- /main navigation -->

				</div>
			</div>
			<!-- /main sidebar -->

			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Page header -->
				<div class="page-header">
					<div class="breadcrumb-line">
						<ul class="breadcrumb">
							<li><a href="designationList.php"><i class="icon-images3 position-left"></i>Designation</a></li>
							<li><a href="datatable_basic.html">List</a></li>
						</ul>
					</div>
				</div>
				<!-- /page header -->


				<!-- Content area -->
				<div class="content">

					<!-- Basic datatable -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Designation List</h5>
							<div class="heading-elements">
								<ul class="icons-list">
									<li style="margin-right: 10px;"><a href="designationAdd.php" class="btn btn-primary add-new"> <i class=" icon-plus-circle2"> </i> Add New</a></li>
									<li><a data-action="collapse"></a></li>
									<li><a data-action="reload"></a></li>
									<li><a data-action="close"></a></li>
								</ul>
							</div>
						</div>

						<div class="panel-body">

							<?php
							if (isset($_GET['msg'])) {
							?>
								<div class="alert alert-success no-border mt-5">
									<button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Close</span></button>
									<span class="text-semibold"></span> <?php echo $_GET['msg']; ?>
								</div>

							<?php } ?>

							<table class="table datatable-basic table-bordered">
								<thead>
									<tr>
										<th width = "5%">SL</th>
										<th width = "80%">Designation Name</th>
										<th width = "15%" class="text-center">Actions</th>
										<th></th>
										<th></th>
										<th></th>
									</tr>
								</thead>
								<tbody>

									<?php
									$selectQry = "SELECT * FROM designation WHERE active_status=1";
										$designationname = mysqli_query($dbCon, $selectQry);
									
									foreach ($designationname as $key => $designation) {

									?>
										<tr>
											<td><?php echo ++$key; ?></td>
											<td><?php echo $designation['designation_name']; ?></td>
											<td class="text-center">
												<a href="designationUpdate.php?designation_id=<?php echo $designation['id']; ?>" class=""><i class=" icon-pencil7"></i></a>
												<a href="designationDelete.php?designation_id=<?php echo $designation['id']; ?>" class=""><i class=" icon-trash-alt"></i></a>
											</td>
											<td></td>
											<td></td>
											<td></td>
										</tr>
									<?php } ?>
								</tbody>
							</table>
						</div>


					</div>
					<!-- /basic datatable -->
					<!-- Footer -->
					<div class="footer text-muted">
						&copy; 2022. <a href="#">Developer Shakil</a> by <a href="#" target="_blank">MD Shakil Sikder</a>
					</div>
					<!-- /footer -->

				</div>
				<!-- /content area -->

			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->

	<!-- Core JS files -->
	<?php include "../includes/script.php"; ?>
	<!-- /Core JS files -->

</body>

</html>