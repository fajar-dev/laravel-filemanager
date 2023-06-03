"use strict";
var KTSigninGeneral = (function () {
    var e, t, i;
    return {
        init: function () {
            (e = document.querySelector("#kt_sign_in_form")),
                (t = document.querySelector("#kt_sign_in_submit")),
                (i = FormValidation.formValidation(e, {
                    fields: { 
                      email: { validators: { regexp: { regexp: /^[^\s@]+@[^\s@]+\.[^\s@]+$/, message: "The value is not a valid email address" }, notEmpty: { message: "Email address is required" } } },
                      password: { validators: { notEmpty: { message: "The password is required" } } },
                    },
                    plugins: { trigger: new FormValidation.plugins.Trigger(), bootstrap: new FormValidation.plugins.Bootstrap5({ rowSelector: ".fv-row", eleInvalidClass: "", eleValidClass: "" }) },
                })),
                t.addEventListener("click", function (n) {
                    n.preventDefault(),
                        i.validate().then(function (i) {
                            "Valid" == i
                                ? (t.setAttribute("data-kt-indicator", "on"),
                                  (t.disabled = !0),
                                  setTimeout(function () {
                                      // t.removeAttribute("data-kt-indicator"),
                                      //     (t.disabled = !1);
                                    document.getElementById("kt_sign_in_form").submit();
                                  }, 2e3))
                                : Swal.fire({
                                      text: "Sorry, looks like there are some errors detected, please try again.",
                                      icon: "error",
                                      buttonsStyling: !1,
                                      confirmButtonText: "Ok, got it!",
                                      customClass: { confirmButton: "btn btn-primary" },
                                  });
                        });
                });
        },
    };
})();

function error() {
    Swal.fire({
        text: "Sorry, username or password you entered is incorrect",
        icon: "error",
        buttonsStyling: !1,
        footer: '<a href="/password/reset">Forgot Password ?</a>',
        confirmButtonText: "Try Again!",
        customClass: { confirmButton: "btn btn-primary" },
    });
}

KTUtil.onDOMContentLoaded(function () {
    KTSigninGeneral.init();
});
