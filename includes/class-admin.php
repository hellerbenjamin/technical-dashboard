<?php

Namespace TechnicalDashboard\Admin;

Class Admin {

	public function run() {

		$this->enqueue_scripts();
		$this->enqueue_styles();

		add_action( 'admin_menu', array( $this, 'add_menu') );
	}

	public function enqueue_scripts() {

	}

	public function enqueue_styles() {

	}

	public function add_menu() {
		add_dashboard_page( 'Technical Dashboard', 'Technical Dashboard', 'manage_options', 'technical-dashboard', array( $this, 'page' ) );
	}

	public function page() {
		var_dump(plugin_dir_path( __FILE__ ) . 'views/technical-dashboard.php');
		require plugin_dir_path( __FILE__ ) . '../views/technical-dashboard.php';
	}


}