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

	//check if the attribute exists.
	if ( typeof cardAlign !== 'undefined' ) {
        extraProps.className = `${extraProps.className} ${cardAlign}`;
	}

	return extraProps;
}

addFilter(
	'blocks.getSaveContent.extraProps',
	'catalina/applyExtraClass',
	applyExtraClass
);