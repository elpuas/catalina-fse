
wp.domReady( function() {
	wp.blocks.registerBlockVariation(
		'core/cover',
		{
			name: 'with-feature-image',
			title: 'With Feature Image',
			category: 'catalina-blocks',
			attributes: {
				useFeaturedImage: true,
			},
			supports: {
				align: ['full'],
			},
		}
	);

	embedVariations = [
		'amazon-kindle',
		'animoto',
		'cloudup',
		'collegehumor',
		'crowdsignal',
		'dailymotion',
		'facebook',
		'flickr',
		'imgur',
		'instagram',
		'issuu',
		'kickstarter',
		'meetup-com',
		'mixcloud',
		'pinterest',
		'reddit',
		'reverbnation',
		'screencast',
		'scribd',
		'slideshare',
		'smugmug',
		'soundcloud',
		'speaker-deck',
		'ted',
		'tiktok',
		'tumblr',
		'videopress',
		'wolfram-cloud',
		'wordpress',
		'wordpress-tv'
	];

	embedVariations.forEach( ( variation ) => {
		wp.blocks.unregisterBlockVariation( 'core/embed', variation );
	});

});