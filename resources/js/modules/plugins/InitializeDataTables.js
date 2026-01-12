/**
 *  Datatables Initialization Module
 *  Handles the initialization of DataTables across the application.
 */


export const InitializeDataTables = {

    config: {
        sorting: false,
        paging: true,
        stateSave: true,
        pageLength: 10,
        responsive: true,
        buttons: [
            {
                extend: 'print',
                className: 'btn btn-default',
            },
            {
                extend: 'csv',
                className: 'btn btn-default',
            },
        ],
        language: {
            search: '',
            searchPlaceholder: 'Search...',
        },
    },

    init(selector = '.datatables', customConfig = {}) {

        const $tables = $(selector);

        if ($tables.length === 0) {
            console.warn(`No tables found for selector: ${selector}`);
            return;
        }

        $tables.each((index, table) => {
            if (!this.isInitialized(table)) {
                this.initializeTable(table,customConfig);
            }
        });
    },


    isInitialized(table) {
        return $.fn.DataTable.isDataTable(table);
    },

    initializeTable(table, customConfig = {}) {
        try {
            const config = { ...this.config, ...customConfig };
            $(table).DataTable(config);
        } catch (error) {
            console.error('Error initializing DataTable:', error, table);
        }
    },


    reinit(selector = '.datatables') {
        $(selector).each((  index, table) => {
            if (this.isInitialized(table)) {
                $(table).DataTable().destroy();
            }
        });

        this.init(selector);
    }

}


// Auto-initialize DataTables on document ready
if (typeof $ !== 'undefined' && $.fn.DataTable) {
    $(document).ready(() => {
        InitializeDataTables.init();
    });
} else {
    console.warn('jQuery or DataTables not found. DataTables initialization skipped.');
}
