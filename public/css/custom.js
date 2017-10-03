import React, {StyleSheet, Dimensions, PixelRatio} from "react-native";
const {width, height, scale} = Dimensions.get("window"),
    vw = width / 100,
    vh = height / 100,
    vmin = Math.min(vw, vh),
    vmax = Math.max(vw, vh);

export default StyleSheet.create({
    "body": {
        "marginTop": 60,
        "fontSize": 0.875
    },
    "tdavatar-sm img": {
        "width": 30,
        "height": 30
    },
    "emp-list-pic img": {
        "width": "100% !important"
    },
    "table-responsive": {
        "display": "table"
    },
    "table th": {
        "borderTop": "none"
    },
    "top-bot": {
        "marginTop": 20,
        "marginBottom": 20
    },
    "btn-circle": {
        "width": 30,
        "height": 30,
        "textAlign": "center",
        "paddingTop": 6,
        "paddingRight": 0,
        "paddingBottom": 6,
        "paddingLeft": 0,
        "fontSize": 12,
        "lineHeight": 1.428571429,
        "borderRadius": 15
    },
    "btn-circlebtn-lg": {
        "width": 50,
        "height": 50,
        "paddingTop": 10,
        "paddingRight": 16,
        "paddingBottom": 10,
        "paddingLeft": 16,
        "fontSize": 18,
        "lineHeight": 1.33,
        "borderRadius": 25
    },
    "btn-circlebtn-xl": {
        "width": 70,
        "height": 70,
        "paddingTop": 10,
        "paddingRight": 16,
        "paddingBottom": 10,
        "paddingLeft": 16,
        "fontSize": 24,
        "lineHeight": 1.33,
        "borderRadius": 35
    }
});