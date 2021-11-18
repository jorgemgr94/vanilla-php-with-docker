const initDates = (rangeSelector, startDateSelector, endDateSelector) => {

    const input_range = $(rangeSelector).val();
    const input_date_start = $(startDateSelector);
    const input_date_end = $(endDateSelector);

    input_date_start.prop("disabled", true);
    input_date_end.prop("disabled", true);

    let dateStart, dateEnd;
    if (input_range === "0") {
        // Última semana
        dateStart = moment().subtract(7, "days");
        dateEnd = moment();
    } else if (input_range === "1") {
        // Último mes
        dateStart = moment().subtract(1, "months").startOf('month');
        dateEnd = moment().subtract(1, "months").endOf('month');
    } else if (input_range === "2") {
        // Último Trimestre
        dateStart = moment().subtract(3, "months").startOf('month');
        dateEnd = moment().subtract(1, "months").endOf('month');
    } else if (input_range === "3") {
        // Último Semestre
        dateStart = moment().subtract(6, "months").startOf('month');
        dateEnd = moment().subtract(1, "months").endOf('month');
    } else if (input_range === "4") {
        // Ultimo año
        dateStart = moment().subtract(12, "months").startOf('month');
        dateEnd = moment().subtract(1, "months").endOf('month');
    } else if (input_range === "5") {
        // Ninguno
        dateStart = moment().startOf('year');
        dateEnd = moment();

        input_date_start.prop("disabled", false);
        input_date_end.prop("disabled", false);
    }

    input_date_start.val(dateStart.format("YYYY-MM-DD"));
    input_date_end.val(dateEnd.format("YYYY-MM-DD"));

};

export { initDates }