.project-img {
		position: relative;
		overflow: hidden;
		border: 1px solid @primary_color;
		background-color: @secondary_color;
		img {
			max-width: 100%;
			margin-left: auto;
			margin-right: auto;
			display: block;
			// scale/zoom
			-moz-transform: scale(1.8);
			-webkit-transform: scale(1.8);
			transform: scale(1.8);
			-moz-transition: all 0.3s;
			-webkit-transition: all 0.3s;
			transition: all 0.3s;
			// opacity
			opacity: 0.6;
			// greyscale
			-webkit-filter: grayscale(100%); /* Safari 6.0 - 9.0 */
			filter: grayscale(100%);
			
			&:hover {
				// scale/zoom
				-moz-transform: scale(1.1);
				-webkit-transform: scale(1.1);
				transform: scale(1.1);
				// opacity
				opacity: 1;
				// greyscale
				-webkit-filter: grayscale(0%); /* Safari 6.0 - 9.0 */
				filter: grayscale(0%);
			}
		}
	}