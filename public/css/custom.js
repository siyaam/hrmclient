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
    "a": {
        "outline": "none"
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
        "borderTop": "none",
        "fontSize": 0.9,
        "fontWeight": "400"
    },
    "top-bot": {
        "marginTop": 20,
        "marginBottom": 20
    },
    "modal-dialog": {
        "position": "relative",
        "width": "auto",
        "maxWidth": 600,
        "marginTop": 10,
        "marginRight": 10,
        "marginBottom": 10,
        "marginLeft": 10
    },
    "modal-sm": {
        "maxWidth": 300
    },
    "modal-lg": {
        "maxWidth": 900
    },
    "modal-profile": {
        "width": "100%",
        "background": "#fff",
        "display": "inline-block",
        "height": "100%",
        "borderRadius": 4,
        "position": "relative",
        "marginTop": 0,
        "marginRight": 0,
        "marginBottom": 0,
        "marginLeft": 0,
        "paddingTop": 0,
        "paddingRight": 0,
        "paddingBottom": 0,
        "paddingLeft": 0
    },
    "top-section": {
        "height": "100px !important",
        "borderRadius": "0px 0px 0 0",
        "background": "url(\"http://lorempixel.com/200/300/\")",
        "backgroundSize": "cover",
        "overflow": "hidden"
    },
    "top-section modal-profile-close-btn": {
        "width": 24,
        "height": 24,
        "top": 1.01,
        "right": 12,
        "position": "absolute"
    },
    "modal-profile avatar": {
        "position": "absolute",
        "top": 80,
        "left": "50%",
        "transform": "translateX(-50%)"
    },
    "avatar img": {
        "borderRadius": "50%",
        "border": "4px solid #fff",
        "boxShadow": "0 3px 9px rgba(172, 192, 233, 0.5)"
    },
    "modal-profile bottom-section": {
        "textAlign": "center",
        "paddingTop": 60,
        "paddingRight": 30,
        "paddingBottom": 20,
        "paddingLeft": 30
    },
    "bottom-section h5": {},
    "bottom-section": {
        "fontSize": 11
    },
    "modal-profile social-media": {
        "paddingTop": 40,
        "paddingBottom": 40,
        "textAlign": "center"
    },
    "social-media a": {
        "marginTop": 0,
        "marginRight": 8,
        "marginBottom": 0,
        "marginLeft": 8,
        "paddingBottom": 10
    },
    "modal-header": {
        "borderBottom": "none",
        "background": "#ACC0E9",
        "borderRadius": "4px 4px 0 0"
    },
    "modal-content": {
        "borderRadius": "4px 4px 4px 4px",
        "overflow": "hidden",
        "backgroundSize": "cover"
    },
    "modal-body": {
        "borderRadius": "0 0 4px 4px",
        "paddingTop": 0,
        "paddingRight": 0,
        "paddingBottom": 0,
        "paddingLeft": 0
    },
    "popover": {
        "marginTop": 0,
        "marginRight": 0,
        "marginBottom": 0,
        "marginLeft": 0,
        "paddingTop": 0,
        "paddingRight": 0,
        "paddingBottom": 0,
        "paddingLeft": 0,
        "width": 20,
        "maxWidth": 276
    },
    "popover-content": {
        "paddingTop": 0,
        "paddingRight": "!important",
        "paddingBottom": 0,
        "paddingLeft": "!important",
        "marginTop": 0,
        "marginRight": "!important",
        "marginBottom": 0,
        "marginLeft": "!important",
        "height": "100%"
    },
    "profile-popover": {
        "paddingTop": 0,
        "paddingRight": 0,
        "paddingBottom": 0,
        "paddingLeft": 0,
        "marginTop": 0,
        "marginRight": 0,
        "marginBottom": 0,
        "marginLeft": 0,
        "height": 250
    },
    "profile-top": {
        "height": 80,
        "marginTop": 0,
        "marginRight": 0,
        "marginBottom": 0,
        "marginLeft": 0,
        "paddingTop": 0,
        "paddingRight": 0,
        "paddingBottom": 0,
        "paddingLeft": 0,
        "width": "100%",
        "borderRadius": "4px 4px 0 0",
        "position": "relative",
        "border": "none"
    },
    "profile-popover-front": {
        "position": "absolute",
        "top": 0,
        "left": 0,
        "width": "100%",
        "paddingTop": 5,
        "paddingRight": 0,
        "paddingBottom": 5,
        "paddingLeft": 0
    },
    "profile-popover-header": {
        "position": "relative",
        "display": "flex",
        "WebkitJustfyContent": "space-between",
        "justifyContent": "space-between",
        "width": "100%",
        "height": 50,
        "paddingTop": 0,
        "paddingRight": 1,
        "paddingBottom": 0,
        "paddingLeft": 1,
        "color": "#fff00"
    },
    "profile-popover-header span": {
        "fontSize": 11,
        "color": "#ccc",
        "paddingTop": 4,
        "paddingRight": 4,
        "paddingBottom": 4,
        "paddingLeft": 4
    },
    "profile-top profile-popover-title": {
        "fontSize": 0.65,
        "position": "absolute",
        "top": "50%",
        "right": 1,
        "color": "#fff",
        "borderRadius": 15,
        "border": "1px solid #ccc",
        "paddingTop": 4,
        "paddingRight": 6,
        "paddingBottom": 4,
        "paddingLeft": 6
    },
    "off-circle": {
        "marginTop": 4,
        "width": 10,
        "height": 10,
        "background": "red",
        "MozBorderRadius": "50%",
        "WebkitBorderRadius": "50%",
        "borderRadius": "50%"
    },
    "on-circle": {
        "marginTop": 4,
        "width": 10,
        "height": 10,
        "background": "green",
        "MozBorderRadius": "50%",
        "WebkitBorderRadius": "50%",
        "borderRadius": "50%"
    },
    "profile-popover-avatar": {
        "position": "absolute",
        "top": 40,
        "paddingTop": 0,
        "paddingRight": 0,
        "paddingBottom": 0,
        "paddingLeft": 1
    },
    "profile-popover-detail h4": {
        "fontSize": 14,
        "paddingTop": 0,
        "paddingRight": 0,
        "paddingBottom": 0,
        "paddingLeft": 0,
        "marginTop": 0,
        "marginRight": 0,
        "marginBottom": 0,
        "marginLeft": 0,
        "color": "#666"
    },
    "profile-popover-detail title": {
        "fontSize": 0.75,
        "color": "#666",
        "marginTop": 0,
        "marginRight": 0,
        "marginBottom": 0,
        "marginLeft": 0,
        "paddingTop": 0,
        "paddingRight": 0,
        "paddingBottom": 0,
        "paddingLeft": 0
    },
    "profile-popover-detail sect": {
        "fontSize": 0.65,
        "color": "#999",
        "borderRadius": 15
    },
    "card-text span": {
        "fontSize": 0.7,
        "color": "#999",
        "display": "block"
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
    },
    "btn": {
        "fontSize": 0.87,
        "paddingTop": 0.4,
        "paddingRight": 1,
        "paddingBottom": 0.4,
        "paddingLeft": 1
    },
    "btn-round-lg": {
        "borderRadius": 22.5
    },
    "btn-round": {
        "borderRadius": 20
    },
    "btn-round-sm": {
        "borderRadius": 15
    },
    "btn-round-xs": {
        "borderRadius": 11,
        "paddingLeft": 10,
        "paddingRight": 10
    },
    "dt-toolbar": {
        "display": "block",
        "position": "relative",
        "paddingTop": 6,
        "paddingRight": 7,
        "paddingBottom": 1,
        "paddingLeft": 7,
        "width": "100%",
        "float": "left",
        "borderBottom": "1px solid #ccc",
        "background": "#fafafa"
    },
    "dataTables_filter": {
        "float": "left",
        "width": "100%"
    },
    "dataTables_filter input-group-addon+form-control": {
        "float": "left"
    },
    "dt-toolbar>:last-child DTTT": {
        "float": "right"
    },
    "dt-toolbar>:last-child dataTables_filter>:only-child": {
        "float": "right"
    },
    "dt-toolbar>:last-child dataTables_length": {
        "float": "right"
    },
    "dt-toolbar>:last-child pagination": {
        "float": "right"
    },
    "table td": {
        "fontSize": 0.87,
        "fontWeight": "300"
    },
    "tabletable thead th": {
        "borderTop": "none"
    },
    "tabletable th": {},
    "tabletable td": {},
    "tabletable a": {
        "marginTop": 0,
        "marginRight": 0,
        "marginBottom": 0,
        "marginLeft": 0,
        "color": "#212529"
    },
    "tabletable label-table": {
        "marginTop": 0,
        "marginRight": 0,
        "marginBottom": 0,
        "marginLeft": 0,
        "paddingTop": 0,
        "paddingRight": 0,
        "paddingBottom": 0,
        "paddingLeft": 0,
        "lineHeight": 15,
        "height": 15
    },
    "tabletable btn-table": {
        "marginTop": 0,
        "marginRight": 1,
        "marginBottom": 0,
        "marginLeft": 1,
        "paddingTop": 3,
        "paddingRight": 7,
        "paddingBottom": 3,
        "paddingLeft": 7
    },
    "tabletable btn-table fa": {
        "fontSize": 11
    },
    "tabletable-hover tbody tr:hover": {
        "backgroundColor": "rgba(0, 0, 0, 0.075)",
        "WebkitTransition": "0.5s",
        "transition": "0.5s"
    },
    "table th-lg": {
        "minWidth": 9
    },
    "tabletable-sm th": {
        "paddingTop": 0.6,
        "paddingBottom": 0.6
    },
    "tabletable-sm td": {
        "paddingTop": 0.6,
        "paddingBottom": 0.6
    }
});