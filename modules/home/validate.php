<?php
	
	$module   = new Module();
	$template = new TEngine();

	# validate view
	if( $module->uri(2) == false ){
		$module->goToModule();
	}

	# validate session
/* 	if( Session::auth() ){
		header("Location: " . $module->index() . "/painel/atomic");
	} */

	$validate = $module->validate();

	if( $validate['error'] == false ){
		
		# default routes
		$template->set([
			'atomic' => [
				'title'   => 'Bem vindo ao Atomic framework',
				'file' 	  => 'atomic',
			    'packages' => ['tailwind']				
			]
			
		]);
		$template->error([
			'title' => 'Falha na geração da pagina',
			'file' => '404',
			'packages' => ['bootstrap']
		]);

	}else{
		# show error core
		$module->coreError("Internal Error" , $validate['message']);
	}


?>