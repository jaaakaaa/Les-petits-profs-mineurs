jQuery(function ($) {
                function changeColor(selector, colors, time) {
                    /* Params:
                     * selector: string,
                     * colors: array of color strings,
                     * every: integer (in mili-seconds)
                     */
                    var curCol = 0,
                        timer = setInterval(function () {
                            if (curCol === colors.length) curCol = 0;
                            $(selector).css("background-color", colors[curCol]);
                            curCol++;
                        }, time);
                }
                $(window).load(function () {
                    changeColor("body", ["purple","rgb(0, 128, 255)","rgb(0, 255, 245)","#00ff93","rgb(0, 232, 0)", "#baff00","rgb(255, 255, 0)",  "rgb(255, 137, 0)", "rgb(255, 0, 0)"], 3000);
                });
            });
