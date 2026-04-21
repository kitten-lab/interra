all tags are parsed into structured json and then projected into multiple lookup systems depending on context:
### - by chestersCRATE payload:
```
        "tags": {
            "news": {
                "media": [
                    "skyline-news"
                ]
            },
            "skyline-news": {
                "section": [
                    "updates"
                ]
            }
        },
```


and the sent out to be threaded into several reports (examples are various contexts, not all the example string):
### - by single-word lookup
```
{
    "media": {
        "gravity": 1,
        "news": {
            "weight": 1,
            "skyline-news": {
                "weight": 1,
                "reported_by": {
                    "SKYLINE-REPORTER": {
                        "1776806032": [
                            "crate.91C7D7CA0B3E81AF"
                        ]
                    }
                }
            }
        }
    }
}
```
### - by entity 
```
{
    "name": "news",
    "gravity": 1,
    "tps_metadata": {
        "added": {
            "cUID": "crate.91C7D7CA0B3E81AF",
            "unix": 1776806032
        },
        "updated": {
            "cUID": "crate.91C7D7CA0B3E81AF",
            "unix": 1776806032
        }
    },
    "contents": {
        "media": {
            "gravity": 1,
            "tps_metadata": {
                "added": {
                    "cUID": "crate.91C7D7CA0B3E81AF",
                    "unix": 1776806032
                },
                "updated": {
                    "cUID": "crate.91C7D7CA0B3E81AF",
                    "unix": 1776806032
                }
            },
            "bin": {
                "skyline-news": {
                    "gravity": 1,
                    "tps_metadata": {
                        "added": {
                            "cUID": "crate.91C7D7CA0B3E81AF",
                            "unix": 1776806032
                        },
                        "updated": {
                            "cUID": "crate.91C7D7CA0B3E81AF",
                            "unix": 1776806032
                        }
                    }
                }
            }
        }
    }
}
```
### - by insect (intersections)
"insect" views show overlapping relationships across entities—where multiple threads converge into shared meaning.
```
{
    "name": "remembers",
    "gravity": 33,
    "tps_metadata": [],
    "remembers": {
        "sdk-808": {
            "weight": 33,
            "bin": {
                "jace": 11,
                "glenshadow": 11,
                "wbs": 11
            }
        }
    }
}
```
### - and by relations 
```
{
    "name": "hymn",
    "gravity": 11,
    "tps_metadata": {
        "added": {
            "cUID": "crate.DCA1352FE41D4F36",
            "unix": 1776802656
        },
        "updated": {
            "cUID": "crate.55B6F0683A627A11",
            "unix": 1776803285
        }
    },
    "hymn": {
        "crate": {
            "weight": 3,
            "bin": {
                "about": 3
            }
        }
    },
    "contents": {
        "about": {
            "gravity": 8,
            "tps_metadata": {
                "added": {
                    "cUID": "crate.DCA1352FE41D4F36",
                    "unix": 1776802656
                },
                "updated": {
                    "cUID": "crate.55B6F0683A627A11",
                    "unix": 1776803285
                }
            },
            "bin": {
                "hymn": {
                    "gravity": 8,
                    "tps_metadata": {
                        "added": {
                            "cUID": "crate.DCA1352FE41D4F36",
                            "unix": 1776802656
                        },
                        "updated": {
                            "cUID": "crate.55B6F0683A627A11",
                            "unix": 1776803285
                        }
                    }
                }
            }
        }
    }
}
```

