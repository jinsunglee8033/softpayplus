
### ATT
delete from stock_sim where product = 'WATTA';
insert into stock_sim (
  `sim_serial`,
  `afcode`,
  `product`,
  `sub_carrier`,
  `amount`,
  `charge_amount_r`,
  `charge_amount_d`,
  `charge_amount_m`,
  `sim_charge`,
  `sim_rebate`,
  `owner_id`,
  `shipped_date`,
  `type`,
  `rtr_month`,
  `spiff_month`,
  `spiff_override_r`,
  `spiff_override_d`,
  `spiff_override_m`,
  `residual_r`,
  `cb_override_r`,
  `cb_override_d`,
  `cb_override_m`,
  `spiff_2_r`,
  `spiff_2_d`,
  `spiff_2_m`,
  `status`,
  `supplier`,
  `supplier_cost`,
  `supplier_date`,
  `supplier_memo`,
  `buyer_name`,
  `buyer_price`,
  `buyer_date`,
  `buyer_memo`,
  `comments`,
  `used_trans_id`,
  `used_date`,
  `upload_date`,
  `c_store_id`
)
select 
  `sim_serial`,
  `afcode`,
  'WATTA',
  `sub_carrier`,
  `amount`,
  `charge_amount_r`,
  `charge_amount_d`,
  `charge_amount_m`,
  `sim_charge`,
  `sim_rebate`,
  `owner_id`,
  `shipped_date`,
  `type`,
  `rtr_month`,
  `spiff_month`,
  `spiff_override_r`,
  `spiff_override_d`,
  `spiff_override_m`,
  `residual_r`,
  `cb_override_r`,
  `cb_override_d`,
  `cb_override_m`,
  `spiff_2_r`,
  `spiff_2_d`,
  `spiff_2_m`,
  `status`,
  `supplier`,
  `supplier_cost`,
  `supplier_date`,
  `supplier_memo`,
  `buyer_name`,
  `buyer_price`,
  `buyer_date`,
  `buyer_memo`,
  `comments`,
  `used_trans_id`,
  `used_date`,
  `upload_date`,
  `c_store_id`
  from att_sims
 where comments <> 'DEMO SIM'
;
delete from stock_esn where product = 'WATTA';
insert into stock_esn (
  `esn`,
  `meid`,
  `product`,
  `sub_carrier`,
  `amount`,
  `charge_amount_r`,
  `charge_amount_d`,
  `charge_amount_m`,
  `owner_id`,
  `shipped_date`,
  `type`,
  `rtr_month`,
  `spiff_month`,
  `rebate_month`,
  `spiff_override_r`,
  `spiff_override_d`,
  `spiff_override_m`,
  `rebate_override_r`,
  `rebate_override_d`,
  `rebate_override_m`,
  `residual_r`,
  `cb_override_r`,
  `cb_override_d`,
  `cb_override_m`,
  `status`,
  `device_type`,
  `supplier`,
  `supplier_subsidy`,
  `supplier_make`,
  `supplier_model`,
  `supplier_cost`,
  `supplier_date`,
  `supplier_memo`,
  `buyer_name`,
  `buyer_price`,
  `buyer_date`,
  `buyer_memo`,
  `comments`,
  `c_store_id`,
  `used_trans_id`,
  `used_date`,
  `upload_date`
)
select 
  `esn`,
  `meid`,
  'WATTA',
  `sub_carrier`,
  `amount`,
  `charge_amount_r`,
  `charge_amount_d`,
  `charge_amount_m`,
  `owner_id`,
  `shipped_date`,
  `type`,
  `rtr_month`,
  `spiff_month`,
  `rebate_month`,
  `spiff_override_r`,
  `spiff_override_d`,
  `spiff_override_m`,
  `rebate_override_r`,
  `rebate_override_d`,
  `rebate_override_m`,
  `residual_r`,
  `cb_override_r`,
  `cb_override_d`,
  `cb_override_m`,
  `status`,
  `device_type`,
  `supplier`,
  `supplier_subsidy`,
  `supplier_make`,
  `supplier_model`,
  `supplier_cost`,
  `supplier_date`,
  `supplier_memo`,
  `buyer_name`,
  `buyer_price`,
  `buyer_date`,
  `buyer_memo`,
  `comments`,
  `c_store_id`,
  `used_trans_id`,
  `used_date`,
  `upload_date`
 from att_esn
 where comments <> 'DEMO IMEI'
;

delete from stock_mapping where product = 'WATTA';
insert into stock_mapping (
  `product`,
  `sim`,
  `esn`,
  `status`,
  `upload_date`
)
select
  'WATTA',
  `sim`,
  `esn`,
  `status`,
  `upload_date`
  from att_mapping
;


### FreeUP
delete from stock_sim where product = 'WFRUPA';
insert into stock_sim (
  `sim_serial`,
  `afcode`,
  `product`,
  `sub_carrier`,
  `amount`,
  `charge_amount_r`,
  `charge_amount_d`,
  `charge_amount_m`,
  `owner_id`,
  `shipped_date`,
  `type`,
  `rtr_month`,
  `spiff_month`,
  `spiff_override_r`,
  `spiff_override_d`,
  `spiff_override_m`,
  `residual_r`,
  `cb_override_r`,
  `cb_override_d`,
  `cb_override_m`,
  `status`,
  `supplier`,
  `supplier_cost`,
  `supplier_date`,
  `supplier_memo`,
  `buyer_name`,
  `buyer_price`,
  `buyer_date`,
  `buyer_memo`,
  `comments`,
  `used_trans_id`,
  `used_date`,
  `upload_date`,
  `c_store_id`
)
select 
  `sim_serial`,
  `afcode`,
  'WFRUPA',
  `sub_carrier`,
  `amount`,
  `charge_amount_r`,
  `charge_amount_d`,
  `charge_amount_m`,
  `owner_id`,
  `shipped_date`,
  `type`,
  `rtr_month`,
  `spiff_month`,
  `spiff_override_r`,
  `spiff_override_d`,
  `spiff_override_m`,
  `residual_r`,
  `cb_override_r`,
  `cb_override_d`,
  `cb_override_m`,
  `status`,
  `supplier`,
  `supplier_cost`,
  `supplier_date`,
  `supplier_memo`,
  `buyer_name`,
  `buyer_price`,
  `buyer_date`,
  `buyer_memo`,
  `comments`,
  `used_trans_id`,
  `used_date`,
  `upload_date`,
  `c_store_id`
  from freeup_sims
 where comments <> 'DEMO SIM'
;
delete from stock_esn where product = 'WFRUPA';
insert into stock_esn (
  `esn`,
  `meid`,
  `product`,
  `sub_carrier`,
  `amount`,
  `charge_amount_r`,
  `charge_amount_d`,
  `charge_amount_m`,
  `owner_id`,
  `shipped_date`,
  `type`,
  `rtr_month`,
  `spiff_month`,
  `rebate_month`,
  `spiff_override_r`,
  `spiff_override_d`,
  `spiff_override_m`,
  `rebate_override_r`,
  `rebate_override_d`,
  `rebate_override_m`,
  `residual_r`,
  `cb_override_r`,
  `cb_override_d`,
  `cb_override_m`,
  `status`,
  `device_type`,
  `supplier`,
  `supplier_subsidy`,
  `supplier_make`,
  `supplier_model`,
  `supplier_cost`,
  `supplier_date`,
  `supplier_memo`,
  `buyer_name`,
  `buyer_price`,
  `buyer_date`,
  `buyer_memo`,
  `comments`,
  `c_store_id`,
  `used_trans_id`,
  `used_date`,
  `upload_date`
)
select 
  `esn`,
  `meid`,
  'WFRUPA',
  `sub_carrier`,
  `amount`,
  `charge_amount_r`,
  `charge_amount_d`,
  `charge_amount_m`,
  `owner_id`,
  `shipped_date`,
  `type`,
  `rtr_month`,
  `spiff_month`,
  `rebate_month`,
  `spiff_override_r`,
  `spiff_override_d`,
  `spiff_override_m`,
  `rebate_override_r`,
  `rebate_override_d`,
  `rebate_override_m`,
  `residual_r`,
  `cb_override_r`,
  `cb_override_d`,
  `cb_override_m`,
  `status`,
  `device_type`,
  `supplier`,
  `supplier_subsidy`,
  `supplier_make`,
  `supplier_model`,
  `supplier_cost`,
  `supplier_date`,
  `supplier_memo`,
  `buyer_name`,
  `buyer_price`,
  `buyer_date`,
  `buyer_memo`,
  `comments`,
  `c_store_id`,
  `used_trans_id`,
  `used_date`,
  `upload_date`
 from freeup_esn
 where comments <> 'DEMO IMEI'
;

delete from stock_mapping where product = 'WFRUPA';
insert into stock_mapping (
  `product`,
  `sim`,
  `esn`,
  `status`,
  `upload_date`
)
select
  'WFRUPA',
  `sim`,
  `esn`,
  `status`,
  `upload_date`
  from freeup_mapping
;


### ROK
delete from stock_sim where product in ('WROKS', 'WROKG', 'WROKC');
insert into stock_sim (
  `sim_serial`,
  `product`,
  `sub_carrier`,
  `amount`,
  `charge_amount_r`,
  `charge_amount_d`,
  `charge_amount_m`,
  `owner_id`,
  `shipped_date`,
  `type`,
  `rtr_month`,
  `spiff_month`,
  `spiff_override_r`,
  `spiff_override_d`,
  `spiff_override_m`,
  `residual_r`,
  `cb_override_r`,
  `cb_override_d`,
  `cb_override_m`,
  `status`,
  `supplier`,
  `supplier_cost`,
  `supplier_date`,
  `supplier_memo`,
  `buyer_name`,
  `buyer_price`,
  `buyer_date`,
  `buyer_memo`,
  `comments`,
  `used_trans_id`,
  `used_date`,
  `upload_date`,
  `c_store_id`
)
select 
  `sim_serial`,
  case sub_carrier 
    when 'SPR' then 'WROKS'
    when 'GSM' then 'WROKG'
    else 'WROKC'
  end product,
  `sub_carrier`,
  `amount`,
  `charge_amount_r`,
  `charge_amount_d`,
  `charge_amount_m`,
  `owner_id`,
  `shipped_date`,
  `type`,
  `rtr_month`,
  `spiff_month`,
  `spiff_override_r`,
  `spiff_override_d`,
  `spiff_override_m`,
  `residual_r`,
  `cb_override_r`,
  `cb_override_d`,
  `cb_override_m`,
  `status`,
  `supplier`,
  `supplier_cost`,
  `supplier_date`,
  `supplier_memo`,
  `buyer_name`,
  `buyer_price`,
  `buyer_date`,
  `buyer_memo`,
  `comments`,
  `used_trans_id`,
  `used_date`,
  `upload_date`,
  `c_store_id`
  from rok_sims
 where comments <> 'DEMO SIM'
;
delete from stock_esn where product in ('WROKS', 'WROKG', 'WROKC');
insert into stock_esn (
  `esn`,
  `product`,
  `sub_carrier`,
  `amount`,
  `charge_amount_r`,
  `charge_amount_d`,
  `charge_amount_m`,
  `owner_id`,
  `shipped_date`,
  `type`,
  `rtr_month`,
  `spiff_month`,
  `rebate_month`,
  `spiff_override_r`,
  `spiff_override_d`,
  `spiff_override_m`,
  `rebate_override_r`,
  `rebate_override_d`,
  `rebate_override_m`,
  `residual_r`,
  `cb_override_r`,
  `cb_override_d`,
  `cb_override_m`,
  `status`,
  `device_type`,
  `supplier`,
  `supplier_subsidy`,
  `supplier_make`,
  `supplier_model`,
  `supplier_cost`,
  `supplier_date`,
  `supplier_memo`,
  `buyer_name`,
  `buyer_price`,
  `buyer_date`,
  `buyer_memo`,
  `comments`,
  `c_store_id`,
  `used_trans_id`,
  `used_date`,
  `upload_date`
)
select 
  `esn`,
  case sub_carrier 
    when 'SPR' then 'WROKS'
    when 'GSM' then 'WROKG'
    else 'WROKC'
  end product,
  `sub_carrier`,
  `amount`,
  `charge_amount_r`,
  `charge_amount_d`,
  `charge_amount_m`,
  `owner_id`,
  `shipped_date`,
  `type`,
  `rtr_month`,
  `spiff_month`,
  `rebate_month`,
  `spiff_override_r`,
  `spiff_override_d`,
  `spiff_override_m`,
  `rebate_override_r`,
  `rebate_override_d`,
  `rebate_override_m`,
  `residual_r`,
  `cb_override_r`,
  `cb_override_d`,
  `cb_override_m`,
  `status`,
  `device_type`,
  `supplier`,
  `supplier_subsidy`,
  `supplier_make`,
  `supplier_model`,
  `supplier_cost`,
  `supplier_date`,
  `supplier_memo`,
  `buyer_name`,
  `buyer_price`,
  `buyer_date`,
  `buyer_memo`,
  `comments`,
  `c_store_id`,
  `used_trans_id`,
  `used_date`,
  `upload_date`
 from rok_esn
 where `esn` not in (
 select `esn` from stock_esn
 )
;



### LYCA
delete from stock_sim where product = 'WLYCA';
insert into stock_sim (
  `sim_serial`,
  `afcode`,
  `product`,
  `sub_carrier`,
  `amount`,
  `type`,
  `rtr_month`,
  `status`,
  `comments`,
  `used_trans_id`,
  `used_date`,
  `upload_date`
)
select 
  `sim_serial`,
  `afcode`,
  'WLYCA',
  `vendor_pid`,
  `amount`,
  `type`,
  `rtr_month`,
  `status`,
  `comments`,
  `used_trans_id`,
  `used_date`,
  `upload_date`
  from lyca_sims
 where comments <> 'DEMO SIM'
;



