/**
 * WordPress Dependencies
 */
const { __ } = wp.i18n;
const { addFilter } = wp.hooks;
const { Fragment }	= wp.element;
const { InspectorAdvancedControls }	= wp.blockEditor;
const { createHigherOrderComponent } = wp.compose;
const { SelectControl } = wp.components;

/**
 * Add mobile visibility controls on Advanced Block Panel.
 *
 * @param {function} BlockEdit Block edit component.
 *
 * @return {function} BlockEdit Modified block edit component.
 */
const withAdvancedControls = createHigherOrderComponent( ( BlockEdit ) => {
    return ( props ) => {

        if ( 'core/query' !==  props.name ) {
            return (
                <BlockEdit { ...props } />
            );
        }

        const {
            attributes,
            setAttributes,
            isSelected,
        } = props;

        const {
            cardAlign,
        } = attributes;

        return (
            <Fragment>
                <BlockEdit {...props} />
                { isSelected &&
                    <InspectorAdvancedControls>
                    <SelectControl
                        label="Float Alignment"
                        value={ cardAlign }
                        options={ [
                            { label: 'None', value: 'float-none' },
                            { label: 'Float Left | Width 30%', value: 'float-left-width-30' },
                            { label: 'Float Left | Width 50%', value: 'float-left-width-50' },
                            { label: 'Float Right | Width 30%', value: 'float-right-width-30' },
                            { label: 'Float Right | Width 50%', value: 'float-right-width-50' },
                        ] }
                        onChange={ ( newAlign ) => {
                            setAttributes( { cardAlign: newAlign } );
                            console.log('newAlign', cardAlign );
                            }
                        }

                    />
                    </InspectorAdvancedControls>
                }

            </Fragment>
        );
    };
}, 'withAdvancedControls');

addFilter(
    'editor.BlockEdit',
    'catalina/block-advanced-control',
    withAdvancedControls
);