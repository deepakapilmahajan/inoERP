<div id="all_contents">
 <div id="content_left"></div>
 <div id="content_right">
	<div id="content_right_left">
	 <div id="content_top"></div>
	 <div id="content">
		<div id="structure">
		 <div id="inv_abc_valuation_divId">
			<!--    START OF FORM HEADER-->
			<div class="error"></div><div id="loading"></div>
			<div class="show_loading_small"></div>
			<?php echo (!empty($show_message)) ? $show_message : ""; ?> 
			<!--    End of place for showing error messages-->
			<div id ="form_header">
			 <form action=""  method="post" id="inv_abc_valuation"  name="inv_abc_valuation"><span class="heading">ABC Valuation </span>
				<div class="large_shadow_box tabContainer">
				 <ul class="column four_column"> 
					<li> <label><img src="<?php echo HOME_URL; ?>themes/images/serach.png" class="inv_abc_valuation_id select_popup clickable">
						ABC Valuation Id : </label><?php $f->text_field_ds('inv_abc_valuation_id') ?>
					 <a name="show" href="form.php?class_name=inv_abc_valuation" class="show inv_abc_valuation_id">	<img src="<?php echo HOME_URL; ?>themes/images/refresh.png" class="clickable"></a> 
					</li>
					<li><label>Valuation Name :</label><?php $f->text_field_d('valuation_name'); ?></li>
					<li><label>Description :</label><?php $f->text_field_d('description'); ?> 					</li>
					<li><label>Criteria :</label>
					 <?php echo $f->select_field_from_object('criteria', inv_abc_valuation::abc_criteria(), 'option_line_code', 'option_line_value', $$class->criteria, 'criteria', '', 1, $readonly); ?></li>
					<li><label>Cost Type :</label>
					 <?php echo $f->select_field_from_object('cost_type', bom_cost_type::find_all(), 'cost_type_code', 'cost_type', $$class->cost_type, 'cost_type', '', '', $readonly); ?>
					<li><label>MRP Plan :</label>
					 <?php echo $f->select_field_from_object('fp_mrp_header_id', fp_mrp_header::find_all(), 'fp_mrp_header_id', 'mrp_name', $$class->fp_mrp_header_id, 'fp_mrp_header_id', '', '', $readonly, '', '', '', 'org_id'); ?></li>
					<li><label>Forecast :</label>
					 <?php echo $f->select_field_from_object('fp_forecast_header_id', fp_forecast_header::find_all(), 'fp_forecast_header_id', 'forecast', $$class->fp_forecast_header_id, 'fp_forecast_header_id', '', '', $readonly, '', '', '', 'org_id'); ?></li>
				 </ul>
				</div>
				<div id ="form_line" class="form_line"><span class="heading">Valuation Details </span>
				 <div id="tabsLine">
					<ul class="tabMain">
					 <li><a href="#tabsLine-1">Scope</a></li>
					 <li><a href="#tabsLine-2">Action</a></li>
					</ul>
					<div class="tabContainer"> 
					 <div id="tabsLine-1" class="tabContent">
						<div> 
						 <ul class="column four_column"> 
							<li><label>Inventory: </label>
							 <?php echo $f->select_field_from_object('scope_org_id', org::find_all_inventory(), 'org_id', 'org', $$class->scope_org_id, 'scope_org_id', '', 1, $readonly1); ?>
							</li>
							<li><label>Sub inventory :</label>
							 <?php echo $f->select_field_from_object('scope_sub_inventory_id', subinventory::find_all_of_org_id($$class->scope_org_id), 'subinventory_id', 'subinventory', $$class->scope_sub_inventory_id, '', 'subinventory_id', '', $readonly); ?>			</li>
							<li><label>Hierarchy :</label><?php $f->text_field_d('scope_org_hirearchy_id'); ?> 					</li>
							<li><label>Product Line :</label>
							 <?php echo $f->select_field_from_object('scope_product_line', item::product_line(), 'option_line_code', 'option_line_value', $$class->scope_product_line, 'scope_product_line', '', '', $readonly); ?></li>
							<li><label>From Date :</label><?php echo $f->date_fieldAnyDay('from_date',$$class->from_date); ?></li>
							<li><label>To Date :</label><?php echo $f->date_fieldAnyDay('to_date',$$class->to_date); ?></li>
						 </ul> 
						</div> 
					 </div> 
					 <div id="tabsLine-2"  class="tabContent">
						<div> 
						 <ul class="column five_column">
							<li><label>Program </label>
							 <a class="button" target="_blank"
									href="program.php?class_name=inv_abc_valuation&program_name=prg_abc_valuation" >New Valuation</a>
							</li>
							<li id="document_print"><label>View : </label> <?php echo $result_stmt; ?>	</li>
						 </ul>
						</div> 
					 </div>
					</div>
				 </div> 
				</div> 
			 </form>
			</div>
			<!--END OF FORM HEADER-->

		 </div>
		</div>
		<!--   end of structure-->
	 </div>
	 <div id="content_bottom"></div>
	</div>
	<div id="content_right_right"></div>
 </div>

</div>
<div id="js_data">
 <ul id="js_saving_data">
	<li class="headerClassName" data-headerClassName="inv_abc_valuation" ></li>
	<li class="savingOnlyHeader" data-savingOnlyHeader="true" ></li>
	<li class="primary_column_id" data-primary_column_id="inv_abc_valuation_id" ></li>
	<li class="form_header_id" data-form_header_id="inv_abc_valuation" ></li>
 </ul>
 <ul id="js_contextMenu_data">
	<li class="docHedaderId" data-docHedaderId="inv_abc_valuation_id" ></li>
	<li class="btn1DivId" data-btn1DivId="inv_abc_valuation_id" ></li>
 </ul>
</div>

<?php include_template('footer.inc') ?>