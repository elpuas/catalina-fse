/**
 * WordPress Dependencies
 */
const { addFilter } = wp.hooks;

/**
 * Add custom attribute for mobile visibility.
 *
 * @param {Object} settings Settings for the block.
 *
 * @return {Object} settings Modified settings.
 */
function addListBlockClassName( settings, name ) {

    if ( name !== 'core/query' ) {
        return settings;
    }

    settings.attributes = Object.assign( settings.attributes, {
        cardAlign:{
            type: 'string',
        }
    });

    console.log('addListBlockClassName', settings);

    return settings;
}

wp.hooks.addFilter(
'blocks.registerBlockType',
'catalina/addListBlockClassName',
addListBlockClassName
);