<?php
class ControllerInvoiceInvService extends Controller {
	public function index() {
		$this->document->setTitle($this->language->get('heading_title'));
		if (isset($this->request->get['entry_update_date'])) {
			$entry_update_date = $this->request->get['entry_update_date'];
		} else {
			$entry_update_date = '';
		}
		if (isset($this->request->get['entry_update_time'])) {
			$entry_update_time = $this->request->get['entry_update_time'];
		} else {
			$entry_update_time = '';
		}
		if (isset($this->request->get['entry_actual_date'])) {
			$entry_actual_date = $this->request->get['entry_actual_date'];
		} else {
			$entry_actual_date = '';
		}       
        if (isset($this->request->get['entry_delivery_add'])) {
			$entry_delivery_add = $this->request->get['entry_delivery_add'];
		} else {
			$entry_delivery_add = '';
		}       
        if (isset($this->request->get['entry_inv_add'])) {
			$entry_inv_add = $this->request->get['entry_inv_add'];
		} else {
			$entry_inv_add = '';
		}        
        if (isset($this->request->get['entry_product1'])) {
			$entry_product1 = $this->request->get['entry_product1'];
        } else {
			$entry_product1 = '';
        }           
        if (isset($this->request->get['entry_product_code1'])) {
			$entry_product_code1 = $this->request->get['entry_product_code1'];
        } else {
			$entry_product_code1 = '';
        }           
        if (isset($this->request->get['entry_piece1'])) {
			$entry_piece1 = $this->request->get['entry_piece1'];
        } else {
			$entry_piece1 = '';
        }           
        if (isset($this->request->get['entry_unit_price1'])) {
			$entry_unit_price1 = $this->request->get['entry_unit_price1'];
        } else {
			$entry_unit_price1 = '';
        }           
        if (isset($this->request->get['entry_price1'])) {
			$entry_price1 = $this->request->get['entry_price1'];
        } else {
			$entry_price1 = '';
        }
		if (isset($this->request->get['page'])) {
			$page = $this->request->get['page'];
		} else {
			$page = 1;
		}
        
		$data['heading_title'] = $this->language->get('heading_title');
		$data['text_list'] = $this->language->get('text_list');
		$data['text_no_results'] = $this->language->get('text_no_results');
		$data['text_confirm'] = $this->language->get('text_confirm');
		$data['text_all_status'] = $this->language->get('text_all_status');
		$data['column_campaign'] = $this->language->get('column_campaign');
		$data['column_code'] = $this->language->get('column_code');
		$data['column_clicks'] = $this->language->get('column_clicks');
		$data['column_orders'] = $this->language->get('column_orders');
		$data['column_total'] = $this->language->get('column_total');
		$data['column_action'] = $this->language->get('column_action');
		$data['entry_update_date'] = $this->language->get('entry_update_date');
		$data['entry_update_time'] = $this->language->get('entry_update_time');
		$data['entry_actual_date'] = $this->language->get('entry_actual_date');
        $data['entry_delivery_add'] = $this->language->get('entry_delivery_add');
		$data['entry_inv_add'] = $this->language->get('entry_inv_add');
		$data['entry_product'] = $this->language->get('entry_product');
        $data['entry_product_code'] = $this->language->get('entry_product_code');
		$data['entry_piece'] = $this->language->get('entry_piece');
		$data['entry_unit_price'] = $this->language->get('entry_unit_price');
        $data['entry_price'] = $this->language->get('entry_price');
		$data['entry_subtotal'] = $this->language->get('entry_subtotal');
		$data['entry_vat18'] = $this->language->get('entry_vat18');
        $data['entry_vat8'] = $this->language->get('entry_vat8');
		$data['entry_total'] = $this->language->get('entry_total');
		$data['entry_inv_text'] = $this->language->get('entry_inv_text');
		$data['button_filter'] = $this->language->get('button_filter');
		$data['token'] = $this->session->data['token'];
		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');
		$this->response->setOutput($this->load->view('invoice/invservice.tpl', $data));
	}
}
