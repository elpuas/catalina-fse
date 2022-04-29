/**
 * WordPress Dependencies
 */
const { addFilter } = wp.hooks;

/**
 * Add custom element class in save element.
 *
 * @param {Object} extraProps     Block element.
 * @param {Object} blockType      Blocks object.
 * @param {Object} attributes     Blocks attributes.
 *
 * @return {Object} extraProps Modified block element.
 */
function applyExtraClass( extraProps, blockType, attributes ) {

	const { cardAlign } = attributes;

	//check if attribute exists for old Gutenberg version compatibility
	//add class only when visibleOnMobile = false
	if ( typeof cardAlign !== 'undefined' ) {
        extraProps.className = `${extraProps.className} ${cardAlign}`;
	}

    console.log('applyExtraClass', extraProps.className);

	return extraProps;
}

addFilter(
	'blocks.getSaveContent.extraProps',
	'catalina/applyExtraClass',
	applyExtraClass
);