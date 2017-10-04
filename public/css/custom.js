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
    "profile-modal": {
        "width": "100%",
        "paddingTop": 30,
        "paddingRight": 30,
        "paddingBottom": 30,
        "paddingLeft": 30,
        "marginBottom": 10
    },
    "profile-modal avatar-sm img": {
        "width": "60%",
        "height": "60%"
    },
    "profile-info name": {
        "fontSize": 1.2,
        "paddingTop": 2,
        "paddingRight": 2,
        "paddingBottom": 2,
        "paddingLeft": 2
    },
    "profile-info post": {
        "fontSize": 0.8,
        "color": "#ccc",
        "paddingTop": 2,
        "paddingRight": 2,
        "paddingBottom": 2,
        "paddingLeft": 2
    },
    "profile-info p": {
        "fontSize": 0.7,
        "color": "#ddd"
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