<?php

class Misc_Functions_Tests extends WP_UnitTestCase {

	/**
	 * @dataProvider _make_url_human_readable_dp
	 */
	public function test_make_url_human_readable( $ugly, $human ) {
		$this->assertEquals( $human, affwp_make_url_human_readable( $ugly ) );
	}

	public function _make_url_human_readable_dp() {
		return array(
			array( 'http://www.example.com', 'www.example.com' ),
			array( 'http://www.example.com/', 'www.example.com' ),
			array( 'http://www.example.com/blog', '../blog/' ),
			array( 'http://www.example.com/blog/', '../blog/' ),
			array( 'http://www.example.com/2016/04/01/april-fools', '../2016/04/01/april-fools/' ),
			array( 'http://www.example.com/2016/04/01/april-fools/', '../2016/04/01/april-fools/' ),
			array( 'http://www.example.com/?s=My+query', 'www.example.com/?s=My+query' ),
			array( 'http://www.example.com/?privateVar=stuff', 'www.example.com' ),
			array( 'http://www.example.com/blog/?s=My+query', '../blog/?s=My+query' ),
			array( 'http://www.example.com/blog/?privateVar=stuff', '../blog/' )
		);
	}


}