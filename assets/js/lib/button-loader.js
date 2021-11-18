const buttonLoading = (selector) => {
    $(selector).prop("disabled", true);

    const text = $(selector).data("loading-text")
    $(selector).html(text);
};

const buttonReset = (selector) => {
    $(selector).prop("disabled", false);

    const text = $(selector).data("text")
    $(selector).html(text);
};

export { buttonLoading, buttonReset }