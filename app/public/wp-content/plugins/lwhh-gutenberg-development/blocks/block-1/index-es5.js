(function () {

    var el = wp.element.createElement;
    var registerBlockType = wp.blocks.registerBlockType;
    var __ = wp.i18n.__;
    var blockStyles = {
        backgroundColor: '#0073aa',
        color: 'white',
        padding: '2em 2.5em',
        textAlign: 'center'
    };

    registerBlockType ( 'lwhhgd/block-1', {

        /*
        Block Title
        */

        title: __( 'LWHH Hello World' ),

         /*
        Block description
        */
       description: __('Hello World is a dummy block to demonstrate what are blockers to '),

         /*
        Block icon
        */
       icon: 'admin-site',

         /*
        Block category
        */
       category: 'common', // common / formatting / widgets / embed

         /*
        Block keywords helps to search the block
        */
       keywords: [ __('lwhh'), __('hello world'), __('test block') ],

         
        // Block attribute or fields map
        
       attributes: {
            heading: {
                type: 'string',
                source: 'text',
                selector: 'h2',
                default: __('Hello World!') // set default value
            },

            excerpt: {
                type: 'string',
                source: 'text',
                selector: 'p',
                default: __('This is a simple except to show how the default property works')
            },
       },

        /*
        Block edit function works on editor
        */

        edit: function(props){
            console.log(props);

            // var setAttributes = props.setAttributes;
            // var attributes = props.attributes;
            // var className = props.className;

            return el('h2', {style: blockStyles}, 'Hello World!')
        },

        /*
        Block save function works for output
        */

        save: function(props){
            console.log(props);

            // var setAttributes = props.setAttributes;
            // var attributes = props.attributes;

            return el('h2', {style: blockStyles}, 'Hello World!')
        },

    });

})();