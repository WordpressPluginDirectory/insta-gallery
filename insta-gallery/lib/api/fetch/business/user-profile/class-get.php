<?php
namespace QuadLayers\IGG\Api\Fetch\Business\User_Profile;

use QuadLayers\IGG\Api\Fetch\Business\Base;

/**
 * Api_Fetch_Business_User_Profile
 */
class Get extends Base {

	/**
	 * Function to get profile data from feed.
	 *
	 * @param string $access_token Account access_token.
	 * @param int    $id Account id.
	 * @return array $data
	 */
	public function get_data( $access_token = null, $id = null ) {
		$response = $this->get_response( $access_token, $id );
		$data     = $this->response_to_data( $response );
		return $data;
	}

	/**
	 * Function to parse response to usable data.
	 *
	 * @param array $response Raw response from instagram.
	 * @return array
	 */
	public function response_to_data( $response = null ) {
		/**
		 * If response is not valid, return response.
		 */
		if ( ! isset( $response['id'], $response['username'] ) ) {
			return $response;
		}

		$data = array(
			'id'        => $response['id'],
			'username'  => $response['username'],
			'link'      => 'https://www.instagram.com/' . $response['username'],
			'nickname'  => isset( $response['name'] ) ? $response['name'] : '',
			'website'   => isset( $response['website'] ) ? $response['website'] : '',
			'biography' => isset( $response['biography'] ) ? $response['biography'] : '',
			'avatar'    => isset( $response['profile_picture_url'] ) ? $response['profile_picture_url'] : '',
		);

		return $data;
	}

	/**
	 * Function to query instagram data.
	 *
	 * @param string $access_token Account access_token.
	 * @param int    $id Account id.
	 * @return array
	 */
	public function get_response( $access_token = null, $id = null ) {
		$url      = $this->get_url( $access_token, $id );
		$response = wp_remote_get(
			$url,
			array(
				'timeout' => 30,
			)
		);
		$response = $this->handle_response( $response );

		return $response;
	}

	/**
	 * Function to build query url.
	 *
	 * @param string $access_token Account access_token.
	 * @param int    $id Account id.
	 * @return string
	 */
	public function get_url( $access_token = null, $id = null ) {
		$url = add_query_arg(
			array(
				'media_type'   => 'REELS',
				'fields'       => 'id,username,website,biography,name,followers_count,media_count,profile_picture_url',
				'access_token' => $access_token,
			),
			"{$this->api_url}/{$id}"
		);

		return $url;
	}
}
