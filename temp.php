<?php function se_post_publish_ping($post_id) {
	//should happen only on first publish
	$status = false;
	if( !empty( $_POST['post_status'] ) && ( $_POST['post_status'] == 'publish' ) && ( $_POST['original_post_status'] != 'publish' ) ) {
		$permalink = get_permalink($post_id);
		$zemanta_response = se_api(array(
			'method' => 'zemanta.post_published_ping',
			'current_url' => $permalink,
			'post_url' => $permalink,
			'post_rid' => '',
			'interface' => 'wordpress-se',
			'deployment' => 'search-everything',
			'format' => 'json'
		));
	  <strong>$response = json_decode($zemanta_response['body']);
		if (isset($response->status) && !is_wp_error($zemanta_response)) {
			$status = $response->status;
		}</strong>
	}
  return $status;
  
  //////////////////////////

  function se_post_publish_ping($post_id) {
	//should happen only on first publish
	$status = false;
	if( !empty( $_POST['post_status'] ) && ( $_POST['post_status'] == 'publish' ) && ( $_POST['original_post_status'] != 'publish' ) ) {
		$permalink = get_permalink($post_id);
		$zemanta_response = se_api(array(
			'method' => 'zemanta.post_published_ping',
			'current_url' => $permalink,
			'post_url' => $permalink,
			'post_rid' => '',
			'interface' => 'wordpress-se',
			'deployment' => 'search-everything',
			'format' => 'json'
		));
               if (!is_wp_error($zemanta_response)) {
	         $response = json_decode($zemanta_response['body']);
		 if (isset($response->status)) {
			$status = $response->status;
		 }
             }
	}
	return $status;