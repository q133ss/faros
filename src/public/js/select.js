if($(select).is('#mainFormServicies')){
    $('#mainFormServicies').select2({
        minimumResultsForSearch: -1,
        theme: "formBlock__top__select"
    });
}

if($(select).is('#authSel')){
    $('#authSel').select2({
        dir: "rtl",
        theme: "selectWrap__selectHorizontal"
    });
}

if($(select).is('#sortSel')){
    $('#sortSel').select2({
        // minimumResultsForSearch: -1,
        theme: "selectWrap__select",
        minimumResultsForSearch: Infinity
    });
}
