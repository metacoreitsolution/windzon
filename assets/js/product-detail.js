document.addEventListener("DOMContentLoaded", function () {
    function query(name) {
        return new URLSearchParams(window.location.search).get(name);
    }

    function typeSection(code, title, image, description, specs) {
        var images = Array.isArray(image) ? image : [image];
        return {
            code: code,
            title: title,
            image: images[0],
            images: images,
            description: description,
            specs: specs
        };
    }

    function itemConfig(config) {
        return config;
    }

    var productCatalog = {
        windows: {
            label: "Windows",
            pageUrl: "window.html",
            items: {
                "casement-windows": itemConfig({
                    title: "Casement Windows",
                    tagline: "Catalogue Detail",
                    intro: "A design-led casement window family styled around a cleaner catalogue presentation. This section now focuses on the three selected casement systems: 30mm, 40mm, and 50mm.",
                    overviewTitle: "Casement Window System Range",
                    overviewSummary: "This range is inspired by the technical style of the catalogue and focuses on practical product comparison. It now presents the 30mm, 40mm, and 50mm casement systems in a clearer Windzon format.",
                    overviewImage: "assets/img/window/01.jpg",
                    overviewPoints: [
                        "Side-hung, top-hung, and mixed composition possibilities",
                        "Premium locking and hardware compatibility",
                        "30mm, 40mm, and 50mm system choices",
                        "Designed for villas, residences, and commercial facades"
                    ],
                    sourceNote: "Key type references and specifications on this page are adapted from the Ventarch catalogue and then restyled for Windzon.",
                    types: [
                        typeSection(
                            "CW - 30",
                            "30mm Casement Windows",
                            ["CW/CW30.png", "CW/CW30(1).png", "CW/CW30(2).png"],
                            "A compact casement solution for projects that need dependable performance, practical locking, and a neat aluminium profile for residential openings and utility-friendly applications.",
                            [
                                "Frame depth: 30 mm",
                                "Locking type: Single & Multipoint Lock with Handle",
                                "Glass range: 4 mm to 6 mm",
                                "Openable sight line: 73.4 mm",
                                "Fix sight line: 44.4 mm",
                                "Corner details: 45 degree cut with corner connector",
                                "Sealing overlap: 6 mm (Sealing with Gasket)",
                                "Window height (max.): 1530 mm",
                                "Hardware: SCHLEGEL GIESSE"
                            ]
                        ),
                        typeSection(
                            "CW - 40",
                            "40mm Casement Windows",
                            ["CW/CW40.png", "CW/CW40(1).png", "CW/CW40(2).png"],
                            "A balanced casement solution for residences, apartment flats, and commercial spaces. It is well suited for projects that need dependable performance, clean framing, and practical everyday operation.",
                            [
                                "Frame depth: 40 mm",
                                "Locking type: Single & Multipoint Lock with Handle",
                                "Glass range: 5 mm to 28 mm",
                                "Openable sight line: 72.3 mm",
                                "Fix sight line: 39 mm",
                                "Corner details: 45 degree cut with corner connector",
                                "Sealing overlap: 6 mm (Sealing with Gasket)",
                                "Window height (max.): 1830 mm",
                                "Hardware: SCHLEGEL GIESSE"
                            ]
                        ),
                        typeSection(
                            "CW - 50",
                            "50mm Casement Windows",
                            ["CW/CW50.png", "CW/CW50(1).png", "CW/CW50(2).png"],
                            "A more premium and robust casement system developed for larger openings and projects that need higher glass compatibility, stronger visual presence, and a refined architectural finish.",
                            [
                                "Frame depth: 50 mm",
                                "Locking type: Single & Multipoint Lock with Handle",
                                "Glass range: 5 mm to 38 mm",
                                "Openable sight line: 97.5 mm",
                                "Fix sight line: 46 mm",
                                "Corner details: 45 degree cut with corner connector",
                                "Sealing overlap: 6 mm (Sealing with Gasket)",
                                "Window height (max.): 2100 mm",
                                "Hardware: SCHLEGEL GIESSE"
                            ]
                        )
                    ]
                }),
                "sliding-windows": itemConfig({
                    title: "Sliding Windows",
                    tagline: "Catalogue Detail",
                    intro: "This product page now follows a more technical catalogue flow, helping users compare the 22mm, 25mm, 27mm, and 37mm sliding window systems instead of only reading a generic description.",
                    overviewTitle: "Sliding Window System Range",
                    overviewSummary: "The sliding family is built around smooth movement, low air leakage, and strong long-term usability. This section now focuses on the four selected sliding systems: 22mm, 25mm, 27mm, and 37mm.",
                    overviewImage: "assets/img/window/01.jpg",
                    overviewPoints: [
                        "Designed for easy movement and sturdy long service life",
                        "Low air leakage and strong sealing intent",
                        "22mm, 25mm, 27mm, and 37mm system choices",
                        "Supports different track depths and glazing requirements"
                    ],
                    sourceNote: "Sliding window type sizes and technical references are adapted from the Ventarch catalogue, then reorganized into a Windzon-style layout.",
                    types: [
                        typeSection(
                            "SW - 22",
                            "22mm Sliding Windows",
                            ["SW/SW22.png", "SW/SW22(1).png", "SW/SW22(2).png", "SW/SW22(3).png"],
                            "A practical entry-level sliding window system suitable for smaller openings and projects where reliable day-to-day operation, simple locking, and straightforward fabrication are the priority.",
                            [
                                "Shutter depth: 22 mm",
                                "Locking type: single point lock",
                                "Corner details: 45 degree cut with corner connector",
                                "Sealing overlap: sealing with wool pile",
                                "Glass range: 4 mm to 6 mm",
                                "Sightline with shutter: 82 mm",
                                "2 track depth: 54 mm",
                                "3 track depth: 84 mm",
                                "Window height (max.): 1530 mm",
                                "Finishes: Powder/Wood/Anodizing",
                                "Hardware & wool pile: NA"
                            ]
                        ),
                        typeSection(
                            "SW - 25",
                            "25mm Sliding Windows",
                            ["SW/SW25.png", "SW/SW25(1).png", "SW/SW25(2).png", "SW/SW25(3).png"],
                            "A more versatile sliding window system for projects that need stronger locking support, a cleaner premium finish, and larger height capacity than the basic compact range.",
                            [
                                "Shutter depth: 25 mm",
                                "Locking type: single and multipoint lock with handle",
                                "Corner details: 45 degree cut with corner connector",
                                "Sealing overlap: 8 mm (sealing with wool pile)",
                                "Glass range: 4 mm to 6 mm",
                                "Sightline with shutter: 95 mm",
                                "2 track depth: 50 mm",
                                "3 track depth: 86 mm",
                                "Window height (max.): 2100 mm",
                                "Finishes: Powder/Wood/Anodizing",
                                "Hardware & wool pile: SCHLEGEL GIESSE"
                            ]
                        ),
                        typeSection(
                            "SW - 27",
                            "27mm Sliding Windows",
                            ["SW/SW27.png", "SW/SW27(1).png", "SW/SW27(2).png", "SW/SW27(3).png"],
                            "A balanced mid-range sliding window system designed for projects that need better sealing, broader glazing choices, and improved hardware compatibility for residential and mixed-use applications.",
                            [
                                "Shutter depth: 27 mm",
                                "Locking type: single & multipoint lock with Champion Plus",
                                "Corner details: 45 degree cut with corner connector",
                                "Sealing overlap: 11 mm (sealing with wool pile)",
                                "Single glass range: 4 / 5 / 6 mm",
                                "Double glass range: 18 mm",
                                "Laminated glass: NA",
                                "Sightline with shutter: 99 mm",
                                "2 track depth: 40 mm",
                                "3 track depth: 75 mm",
                                "Window height (max.): 2135 mm",
                                "Finishes: Powder/Wood/Anodizing",
                                "Hardware & wool pile: SCHLEGEL GIESSE"
                            ]
                        ),
                        typeSection(
                            "SW - 37",
                            "37mm Sliding Windows",
                            ["SW/SW37.png", "SW/SW37(1).png", "SW/SW37(2).png", "SW/SW37(3).png"],
                            "A stronger sliding window solution for larger spans and heavier glazing where enhanced build depth, premium hardware support, and larger overall dimensions are needed. This range also supports the sleek profile concept.",
                            [
                                "Shutter depth: 37 mm",
                                "Locking type: single and multipoint lock with handle",
                                "Corner details: 45 degree cut with corner connector",
                                "Sealing overlap: 9 mm (sealing with wool pile)",
                                "Glass range: 6 mm to 24 mm",
                                "Sightline with shutter: 124 mm",
                                "2 track depth: 61 mm",
                                "3 track depth: 110 mm",
                                "Window height (max.): 3010 mm",
                                "Finishes: Powder/Wood/Anodizing",
                                "Hardware & wool pile: SCHLEGEL GIESSE"
                            ]
                        )
                    ]
                }),
                "fixed-windows": itemConfig({
                    title: "Fixed Windows",
                    tagline: "Catalogue Detail",
                    intro: "This product page now follows the same detailed catalogue format as Casement and Sliding Windows, with the focus on the 30mm and 40mm fixed window systems.",
                    overviewTitle: "Fixed Window System Range",
                    overviewSummary: "Fixed windows are used where daylight, visual openness, and clean elevation matter most. This section now presents the 30mm and 40mm fixed window options in the same structured style.",
                    overviewImage: "FW/FW30.png",
                    overviewPoints: [
                        "High glass-to-frame visual impact",
                        "30mm and 40mm system choices",
                        "Suitable for design-led facades and stair cores",
                        "Supports laminated, insulated, and performance glass"
                    ],
                    sourceNote: "Fixed and mixed-format references are organised from the same casement-family design language and adapted for Windzon presentation.",
                    types: [
                        typeSection(
                            "FW - 30",
                            "30mm Fixed Windows",
                            ["FW/FW30.png", "FW/FW30(1).png"],
                            "A compact fixed window solution for smaller feature openings and clean modern compositions where minimal maintenance and daylight entry are the main goals.",
                            [
                                "Frame depth: 30 mm",
                                "Locking type: Not applicable (Fixed system)",
                                "Glass range: 4 mm to 12 mm",
                                "Openable sight line: Not applicable",
                                "Fix sight line: 28 mm - 32 mm",
                                "Corner details: 45 degree cut with corner cleat / connector",
                                "Sealing overlap: 4 mm - 5 mm (EPDM / PVC gasket sealing)",
                                "Window height (max.): 1200 mm - 1500 mm",
                                "Hardware: Basic accessories (gaskets, setting blocks, screws)"
                            ]
                        ),
                        typeSection(
                            "FW - 40",
                            "40mm Fixed Windows",
                            ["FW/FW40.png", "FW/FW40(1).png"],
                            "A balanced fixed window solution for residential and commercial projects where a clean framed look, practical glazing flexibility, and dependable structural performance are important.",
                            [
                                "Frame depth: 40 mm",
                                "Locking type: Not applicable (Fixed system)",
                                "Glass range: 5 mm to 20 mm",
                                "Openable sight line: Not applicable",
                                "Fix sight line: 35 mm - 40 mm",
                                "Corner details: 45 degree cut with corner cleat / connector",
                                "Sealing overlap: 5 mm - 6 mm (EPDM gasket sealing)",
                                "Window height (max.): 1500 mm - 1800 mm",
                                "Hardware: Standard accessories (EPDM gaskets, spacers, fixing screws)"
                            ]
                        )
                    ]
                }),
                "top-hung-windows": itemConfig({
                    title: "Top Hung Windows",
                    tagline: "Catalogue Detail",
                    intro: "A functional outward-opening window system designed for controlled ventilation, weather protection, and modern architectural applications. It is ideal for high-level openings, bathrooms, kitchens, and commercial facades.",
                    overviewTitle: "Top Hung Window Series",
                    overviewSummary: "Top-hung windows are hinged at the top and open outward from the bottom, allowing ventilation even during rain while helping prevent water ingress. This series includes standard, premium friction-stay, and heavy-duty top-guided options.",
                    overviewImage: "assets/img/window/01.jpg",
                    overviewPoints: [
                        "Frame depth: 50 mm - 100 mm",
                        "Locking type: Single Handle with Multipoint Locking",
                        "Glass range: 5 mm to 28 mm (Double glazed options available)",
                        "Hardware: Friction stays, handles, restrictors (Kinlong / Giesse type systems)"
                    ],
                    sourceNote: "General system data and type descriptions for this section are based on the updated top-hung window details you provided and are rebuilt into Windzon’s catalogue-style layout.",
                    types: [
                        typeSection(
                            "TH - 01",
                            "Standard Top Hung (Butt Hinge Type)",
                            "assets/img/window/01.jpg",
                            "A basic and economical top-hung system suitable for small to medium openings.",
                            [
                                "Frame depth: 40 mm - 50 mm",
                                "Locking type: Single point lock with handle",
                                "Glass range: 5 mm - 12 mm",
                                "Openable sight line: 80 mm - 95 mm",
                                "Sealing: Brush / EPDM gasket",
                                "Max size: Up to 1200 mm height",
                                "Hardware: Butt hinges, simple handle"
                            ]
                        ),
                        typeSection(
                            "TH - 02",
                            "Friction Stay Top Hung (Premium System)",
                            "assets/img/window/01.jpg",
                            "A premium system with friction stay hinges for smooth operation, better load capacity, and controlled opening angles.",
                            [
                                "Frame depth: 50 mm - 70 mm",
                                "Locking type: Multipoint locking with handle",
                                "Glass range: 6 mm - 24 mm",
                                "Openable sight line: 90 mm - 110 mm",
                                "Sealing overlap: 6 mm - 7 mm (EPDM gasket)",
                                "Max size: 1500 mm height",
                                "Hardware: Stainless steel friction stays, restrictor, premium handles",
                                "Allows controlled opening and better wind resistance due to friction stay mechanism"
                            ]
                        ),
                        typeSection(
                            "TH - 03",
                            "Top Guided / Heavy Duty Top Hung",
                            "assets/img/window/01.jpg",
                            "A high-performance system for large and heavy shutters, commonly used in commercial and facade applications.",
                            [
                                "Frame depth: 70 mm - 100 mm",
                                "Locking type: Multipoint locking system",
                                "Glass range: 8 mm - 38 mm (Double / Triple glazing)",
                                "Openable sight line: 100 mm - 120 mm",
                                "Fix sight line: 55 mm - 70 mm",
                                "Sealing overlap: 6 mm - 8 mm",
                                "Max size: Up to 2000 mm height / heavy sash (up to ~130 kg)",
                                "Hardware: Heavy-duty friction stays, restrictors, concealed hinges"
                            ]
                        )
                    ]
                }),
                "bay-bow-windows": itemConfig({
                    title: "Bay & Bow Windows",
                    tagline: "Catalogue Detail",
                    intro: "A projecting window system designed to extend outward from the facade, creating additional interior space, panoramic views, and enhanced architectural aesthetics.",
                    overviewTitle: "Bay & Bow Window System",
                    overviewSummary: "Bay and bow windows are ideal for premium residential and design-led projects where added depth, wider views, and a stronger facade statement are important.",
                    overviewImage: "assets/img/window/01.jpg",
                    overviewPoints: [
                        "Projects outward from the facade for extra spatial effect",
                        "Creates panoramic views and stronger daylight spread",
                        "Supports angular and curved panel compositions",
                        "Well suited to premium residential architecture"
                    ],
                    sourceNote: "Bay and bow window system content is updated from the technical details you provided and rebuilt into Windzon’s catalogue-style layout.",
                    types: [
                        typeSection(
                            "BW - 01",
                            "Bay Window (Angular Type)",
                            "assets/img/window/01.jpg",
                            "Typically configured with 3 panels and angled sides at 30 or 45 degrees, this system creates a strong projecting form and a crisp architectural bay effect.",
                            [
                                "Frame depth: 60 mm - 100 mm",
                                "Locking type: Multipoint locking (for openable panels)",
                                "Glass range: 5 mm - 28 mm",
                                "Openable sight line: 85 mm - 110 mm",
                                "Fix sight line: 50 mm - 65 mm",
                                "Corner details: Mullion / corner post (90 degree / angled connectors)",
                                "Sealing overlap: 6 mm - 8 mm (EPDM gasket)",
                                "Window height (max.): 1500 mm - 2100 mm",
                                "Hardware: Hinges, handles, mullion connectors"
                            ]
                        ),
                        typeSection(
                            "BW - 02",
                            "Bow Window (Curved Type)",
                            "assets/img/window/01.jpg",
                            "A curved multi-panel system using 4 to 6 panels to form a smooth bow profile with broader viewing angles and a softer architectural expression.",
                            [
                                "Frame depth: 70 mm - 120 mm",
                                "Locking type: Multipoint locking",
                                "Glass range: 6 mm - 32 mm",
                                "Openable sight line: 90 mm - 120 mm",
                                "Fix sight line: 55 mm - 70 mm",
                                "Corner details: Curved / segmented joints",
                                "Sealing overlap: 6 mm - 8 mm",
                                "Window height (max.): Up to 2400 mm",
                                "Hardware: Custom connectors, reinforced profiles"
                            ]
                        )
                    ]
                }),
                "sash-windows": itemConfig({
                    title: "Sash Windows",
                    tagline: "Catalogue Detail",
                    intro: "A vertically sliding window system combining traditional aesthetics with modern balancing mechanisms for smooth operation.",
                    overviewTitle: "Sash Window System",
                    overviewSummary: "Sash windows are ideal for projects that want a classic visual language with practical vertical sliding functionality and balanced modern hardware performance.",
                    overviewImage: "assets/img/window/01.jpg",
                    overviewPoints: [
                        "Vertically sliding operation with traditional character",
                        "Suitable for premium homes and renovation-led designs",
                        "Combines heritage aesthetics with modern balancing systems",
                        "Available in single and double hung formats"
                    ],
                    sourceNote: "Sash window system content is updated from the technical details you provided and rebuilt into Windzon’s catalogue-style layout.",
                    types: [
                        typeSection(
                            "SASH - 01",
                            "Single Hung Sash",
                            "assets/img/window/01.jpg",
                            "A vertically sliding sash system where the top panel remains fixed and the bottom panel is movable.",
                            [
                                "Frame depth: 50 mm - 90 mm",
                                "Locking type: Cam lock / latch",
                                "Glass range: 4 mm - 20 mm",
                                "Sash sight line: 70 mm - 95 mm",
                                "Sealing: Brush / weather pile + gasket",
                                "Max height: 1500 mm",
                                "Hardware: Balancing springs, locks"
                            ]
                        ),
                        typeSection(
                            "SASH - 02",
                            "Double Hung Sash",
                            "assets/img/window/01.jpg",
                            "A vertically sliding sash system where both the top and bottom panels are movable for improved ventilation flexibility.",
                            [
                                "Frame depth: 60 mm - 100 mm",
                                "Locking type: Central cam lock",
                                "Glass range: 5 mm - 24 mm",
                                "Sash sight line: 80 mm - 100 mm",
                                "Sealing overlap: 5 mm - 7 mm",
                                "Max height: 1800 mm",
                                "Hardware: Spiral / block balance system"
                            ]
                        )
                    ]
                }),
                "slimline-protection-system": itemConfig({
                    title: "Slimline Protection System",
                    tagline: "Catalogue Detail",
                    intro: "A modern safety system integrated with windows to provide protection without compromising aesthetics or visibility.",
                    overviewTitle: "Slimline Protection System",
                    overviewSummary: "This system is designed for projects that need residential or high-rise safety while preserving a clean visual language and minimal obstruction.",
                    overviewImage: "assets/img/window/01.jpg",
                    overviewPoints: [
                        "Modern safety integration without heavy visual impact",
                        "Supports aluminium grill, cable, and combined window systems",
                        "Suitable for residential and high-rise safety use",
                        "Preserves visibility and aesthetics"
                    ],
                    sourceNote: "Slimline protection system content is updated from the technical details you provided and rebuilt into Windzon’s catalogue-style layout.",
                    types: [
                        typeSection(
                            "SP - 01",
                            "Slim Aluminium Grill System",
                            "assets/img/window/01.jpg",
                            "A slim aluminium grill system designed for residential safety with clean lines and discreet profile sizes.",
                            [
                                "Profile size: 10 mm - 25 mm",
                                "Spacing: 100 mm - 150 mm",
                                "Finish: Powder coated / anodized",
                                "Mounting: Inside / outside frame fixing",
                                "Application: Residential safety"
                            ]
                        ),
                        typeSection(
                            "SP - 02",
                            "Stainless Steel Cable (Invisible Grill)",
                            "assets/img/window/01.jpg",
                            "A low-visibility stainless steel cable protection system designed to preserve views while providing secure high-rise and residential protection.",
                            [
                                "Cable thickness: 2 mm - 3 mm SS wire",
                                "Spacing: 50 mm - 100 mm",
                                "Tension system: Anchored frame with tensioners",
                                "Height limit: Up to 3000 mm",
                                "Finish: SS natural / coated"
                            ]
                        ),
                        typeSection(
                            "SP - 03",
                            "Integrated Window + Grill System",
                            "assets/img/window/01.jpg",
                            "A combined safety and window solution where the grill is integrated within the frame or attached externally for high-rise protection without compromising design.",
                            [
                                "Frame depth: 60 mm - 100 mm",
                                "Glass range: 5 mm - 24 mm",
                                "Integration: Grill within frame / external attachment",
                                "Sealing: Gasket-based system",
                                "Application: High-rise safety + aesthetics"
                            ]
                        )
                    ]
                }),
                "thermal-windows": itemConfig({
                    title: "Thermal Windows",
                    tagline: "Catalogue Detail",
                    intro: "A high-performance insulated window system designed to reduce heat transfer, improve energy efficiency, and enhance acoustic performance.",
                    overviewTitle: "Thermal (Thermal Break) Window System",
                    overviewSummary: "Thermal break windows are ideal for projects that need better energy performance, improved acoustic insulation, and premium glazing compatibility in modern aluminium systems.",
                    overviewImage: "assets/img/window/01.jpg",
                    overviewPoints: [
                        "Designed to reduce heat transfer and improve efficiency",
                        "Supports double and triple glazing solutions",
                        "Suitable for premium homes, offices, and facade projects",
                        "Improves acoustic and thermal performance"
                    ],
                    sourceNote: "Thermal break window system content is updated from the technical details you provided and rebuilt into Windzon’s catalogue-style layout.",
                    types: [
                        typeSection(
                            "TW - 01",
                            "Thermal Casement / Top Hung",
                            "assets/img/window/01.jpg",
                            "A high-performance thermal break window system for casement and top-hung applications where better insulation and premium glazing are required.",
                            [
                                "Frame depth: 60 mm - 120 mm",
                                "Thermal break: 14 mm - 34 mm polyamide strip",
                                "Glass range: 18 mm - 42 mm (Double / Triple glazing)",
                                "Openable sight line: 90 mm - 120 mm",
                                "Fix sight line: 55 mm - 75 mm",
                                "Sealing overlap: 6 mm - 8 mm (EPDM + multi-seal)",
                                "U-value: 1.2 - 2.5 W/m2K",
                                "Max height: 2400 mm",
                                "Hardware: Premium (Giesse / Kinlong / Schuco compatible)"
                            ]
                        ),
                        typeSection(
                            "TW - 02",
                            "Thermal Sliding Window",
                            "assets/img/window/01.jpg",
                            "A thermal sliding system designed for wider openings where insulation performance, larger panel handling, and improved track sealing are important.",
                            [
                                "Frame depth: 80 mm - 150 mm",
                                "Glass range: 20 mm - 36 mm",
                                "Track system: Double / triple track",
                                "Sealing: Brush + gasket combination",
                                "Max panel weight: 150 - 250 kg"
                            ]
                        )
                    ]
                })
            }
        },
        doors: {
            label: "Doors",
            pageUrl: "door.html",
            items: {
                "sliding-doors": itemConfig({
                    title: "Sliding Doors",
                    tagline: "Catalogue Detail",
                    intro: "A space-saving horizontal sliding system designed for large openings, seamless views, and smooth operation.",
                    overviewTitle: "Sliding Door System",
                    overviewSummary: "Sliding door systems are ideal for wide openings where space-saving movement, larger glass areas, and smooth daily operation are essential.",
                    overviewImage: "Door/Sliding Door.png",
                    overviewPoints: ["Frame depth: 60 mm - 150 mm", "Track options: 2 / 3 / 4 track systems", "Max panel weight: 80 - 200 kg", "Max height: Up to 3000 mm"],
                    sourceNote: "Sliding door system content is updated from the technical details you provided and rebuilt into Windzon’s catalogue-style layout.",
                    types: [
                        typeSection("SD - 01", "Sliding Door System", "Door/Sliding Door.png", "A space-saving horizontal sliding system designed for large openings, seamless views, and smooth operation.", ["Frame depth: 60 mm - 150 mm (depending on track system)", "Locking type: Hook lock / multipoint lock", "Glass range: 5 mm - 28 mm (Double glazing optional)", "Shutter sight line: 35 mm - 80 mm", "Track options: 2 / 3 / 4 track systems", "Sealing: Brush + EPDM gasket combination", "Max panel weight: 80 - 200 kg", "Max height: Up to 3000 mm", "Hardware: Rollers, handles, locks (Kinlong / Giesse compatible)"])
                    ]
                }),
                "hinged-doors": itemConfig({
                    title: "Hinged Doors",
                    tagline: "Catalogue Detail",
                    intro: "A classic swing door system offering strong sealing, security, and versatility for residential and commercial use.",
                    overviewTitle: "Hinged Door System Range",
                    overviewSummary: "Hinged door systems are suited to projects that need strong sealing, secure locking, and reliable inward or outward swing operation for residential and commercial applications.",
                    overviewImage: "Door/Hanging Door.png",
                    overviewPoints: ["Frame depth: 50 mm - 100 mm", "Locking type: Single / multipoint locking", "Opening type: Inward / outward", "Max height: 2400 mm"],
                    sourceNote: "Hinged door system content is updated from the technical details you provided and rebuilt into Windzon’s catalogue-style layout.",
                    types: [
                        typeSection("HD - 01", "Hinged Door System", "Door/Hanging Door.png", "A classic swing door system offering strong sealing, security, and versatility for residential and commercial use.", ["Frame depth: 50 mm - 100 mm", "Locking type: Single / multipoint locking", "Glass range: 5 mm - 36 mm", "Shutter sight line: 80 mm - 120 mm", "Opening type: Inward / outward", "Sealing overlap: 6 mm - 8 mm (EPDM gasket)", "Max height: 2400 mm", "Hardware: Hinges, handles, door closers, locks"])
                    ]
                }),
                "fixed-glass-doors": itemConfig({
                    title: "Fixed Glass Doors",
                    tagline: "Catalogue Detail",
                    intro: "A non-openable or partially fixed glass door system used for partitions, entrances, and aesthetic transparency.",
                    overviewTitle: "Fixed Glass Door System",
                    overviewSummary: "Fixed glass door systems are ideal for partitions, entrances, and spaces where visual openness and minimal framing are important.",
                    overviewImage: "Door/Fixed Door.png",
                    overviewPoints: ["Frame depth: 30 mm - 60 mm", "Locking type: Not applicable (fixed panel)", "Glass range: 8 mm - 15 mm", "Max height: Up to 3000 mm"],
                    sourceNote: "Fixed glass door system content is updated from the technical details you provided and rebuilt into Windzon’s catalogue-style layout.",
                    types: [
                        typeSection("FGD - 01", "Fixed Glass Door System", "Door/Fixed Door.png", "A non-openable or partially fixed glass door system used for partitions, entrances, and aesthetic transparency.", ["Frame depth: 30 mm - 60 mm", "Locking type: Not applicable (fixed panel)", "Glass range: 8 mm - 15 mm (Toughened glass)", "Sight line: 25 mm - 50 mm", "Sealing: Silicone / gasket sealing", "Max height: Up to 3000 mm", "Hardware: Patch fittings / minimal frame accessories"])
                    ]
                }),
                "folding-doors": itemConfig({
                    title: "Folding Doors",
                    tagline: "Catalogue Detail",
                    intro: "A multi-panel folding system that opens fully to create wide, unobstructed openings.",
                    overviewTitle: "Folding Door System (Bi-Fold)",
                    overviewSummary: "Bi-fold door systems are ideal for projects that need wide full-opening access, flexible panel movement, and strong indoor-outdoor transition.",
                    overviewImage: "Door/Folding Door.png",
                    overviewPoints: ["Frame depth: 60 mm - 100 mm", "Opening style: Inward / outward folding", "Max panel weight: 80 - 120 kg", "Max height: 3000 mm"],
                    sourceNote: "Folding door system content is updated from the technical details you provided and rebuilt into Windzon’s catalogue-style layout.",
                    types: [
                        typeSection("FD - 01", "Folding Door System (Bi-Fold)", "Door/Folding Door.png", "A multi-panel folding system that opens fully to create wide, unobstructed openings.", ["Frame depth: 60 mm - 100 mm", "Locking type: Multipoint locking", "Glass range: 5 mm - 28 mm", "Panel sight line: 70 mm - 100 mm", "Opening style: Inward / outward folding", "Sealing: Brush + gasket combination", "Max panel weight: 80 - 120 kg", "Max height: 3000 mm", "Hardware: Rollers, hinges, top/bottom tracks"])
                    ]
                }),
                "french-doors": itemConfig({
                    title: "French Doors",
                    tagline: "Catalogue Detail",
                    intro: "A double-leaf hinged door system offering elegance, symmetry, and wide opening access.",
                    overviewTitle: "French Door System",
                    overviewSummary: "French door systems are ideal for projects that need symmetrical double-shutter access, elegant proportions, and wider opening movement.",
                    overviewImage: "Door/French Doors.png",
                    overviewPoints: ["Frame depth: 50 mm - 90 mm", "Locking type: Multipoint lock with handle", "Opening type: Inward / outward (double shutter)", "Max height: 2400 mm"],
                    sourceNote: "French door system content is updated from the technical details you provided and rebuilt into Windzon’s catalogue-style layout.",
                    types: [
                        typeSection("FDR - 01", "French Door System", "Door/French Doors.png", "A double-leaf hinged door system offering elegance, symmetry, and wide opening access.", ["Frame depth: 50 mm - 90 mm", "Locking type: Multipoint lock with handle", "Glass range: 5 mm - 24 mm", "Shutter sight line: 80 mm - 110 mm", "Opening type: Inward / outward (double shutter)", "Sealing overlap: 6 mm - 8 mm", "Max height: 2400 mm", "Hardware: Hinges, handles, tower bolts"])
                    ]
                }),
                "customized-doors": itemConfig({
                    title: "Customized Doors",
                    tagline: "Catalogue Detail",
                    intro: "A tailor-made door system designed for unique architectural requirements, combining functionality with design flexibility.",
                    overviewTitle: "Customized Door System",
                    overviewSummary: "Customized door systems are suited to projects that need flexible design options, non-standard dimensions, and premium hardware solutions built around the project brief.",
                    overviewImage: "Door/Custom Doors.png",
                    overviewPoints: ["Frame depth: 50 mm - 150 mm (customized)", "Design options: Sliding / hinged / pivot / mixed systems", "Glass range: 5 mm - 40 mm", "Max height: Up to 3500 mm"],
                    sourceNote: "Customized door system content is updated from the technical details you provided and rebuilt into Windzon’s catalogue-style layout.",
                    types: [
                        typeSection("CD - 01", "Customized Door System", "Door/Custom Doors.png", "A tailor-made door system designed for unique architectural requirements, combining functionality with design flexibility.", ["Frame depth: 50 mm - 150 mm (customized)", "Locking type: As per design (smart locks / multipoint / magnetic)", "Glass range: 5 mm - 40 mm", "Design options: Sliding / hinged / pivot / mixed systems", "Sealing: Custom gasket / brush / silicone", "Max height: Up to 3500 mm (depending on design)", "Hardware: Premium / designer hardware solutions"])
                    ]
                })
            }
        },
        blinds: {
            label: "Blinds",
            pageUrl: "blinds.html",
            items: {
                "skylight-roman-blinds": itemConfig({
                    title: "SKYLIGHT Roman blinds",
                    tagline: "Product Detail",
                    intro: "A fabric-based folding blind system designed specifically for skylights, offering soft aesthetics with controlled daylight and heat reduction.",
                    overviewTitle: "SKYLIGHT Roman blinds",
                    overviewSummary: "Skylight roman blinds are ideal for roof windows and inclined glazing where elegant fabric presentation, shading control, and reduced solar gain are important.",
                    overviewImage: "assets/img/window/01.jpg",
                    overviewPoints: ["System type: Manual / Motorized Roman blind", "Fabric options: Blackout / translucent / sunscreen fabrics", "Light control: Partial to full blackout", "Max size: 1500 mm x 2000 mm"],
                    sourceNote: "Blinds pages are updated to keep only the three selected blind options in the same product-detail layout.",
                    types: [
                        typeSection(
                            "SB - 01",
                            "SKYLIGHT Roman blinds",
                            "assets/img/window/01.jpg",
                            "A fabric-based folding blind system designed specifically for skylights, offering soft aesthetics with controlled daylight and heat reduction.",
                            [
                                "System type: Manual / Motorized Roman blind",
                                "Fabric options: Blackout / translucent / sunscreen fabrics",
                                "Fabric GSM: 200 - 400 GSM",
                                "Operation: Chain drive / motorized (remote or smart control)",
                                "Frame compatibility: Aluminium / uPVC skylight frames",
                                "Mounting: Top-mounted with side guide wires / channels",
                                "Light control: Partial to full blackout",
                                "Max size: 1500 mm x 2000 mm",
                                "Sealing: Fabric overlap with side guides",
                                "Hardware: Roller tubes, cords, motor (Somfy / Dooya optional)"
                            ]
                        )
                    ]
                }),
                "skylight-blinds": itemConfig({
                    title: "SKYLIGHT BLINDS",
                    tagline: "Product Detail",
                    intro: "A high-performance blind system designed for horizontal or inclined glazing, ensuring stable operation even on sloped roofs.",
                    overviewTitle: "SKYLIGHT BLINDS",
                    overviewSummary: "Skylight blind systems are designed for roof and inclined glazing applications where controlled operation, blackout capability, and stable guided movement are important.",
                    overviewImage: "assets/img/window/01.jpg",
                    overviewPoints: ["Designed for horizontal or inclined glazing", "Supports tensioned and roller configurations", "Stable operation on sloped roofs", "High blackout and glare control performance"],
                    sourceNote: "Blinds pages are updated to keep only the three selected blind options in the same product-detail layout.",
                    types: [
                        typeSection(
                            "SB - 02",
                            "Tensioned Skylight Blind (Zip / Cable Guided)",
                            "assets/img/window/01.jpg",
                            "A high-performance tensioned skylight blind system designed for horizontal or inclined glazing where guided movement and strong blackout performance are essential.",
                            [
                                "System type: Tension-controlled (spring / motorized)",
                                "Fabric: Blackout / screen / reflective",
                                "Guide system: Side channels / SS cable guide",
                                "Operation: Motorized (recommended)",
                                "Glass compatibility: Skylight / roof glazing",
                                "Light control: 90% - 100% blackout",
                                "Max size: 2000 mm x 3000 mm",
                                "Wind resistance: High (zip system)",
                                "Hardware: Tubular motor, guide channels"
                            ]
                        ),
                        typeSection(
                            "SB - 03",
                            "Skylight Roller Blind",
                            "assets/img/window/01.jpg",
                            "A roller-based skylight blind solution for inclined or overhead glazing where simple operation and effective residential shading are needed.",
                            [
                                "System type: Roller mechanism",
                                "Operation: Manual / motorized",
                                "Fabric range: 180 - 350 GSM",
                                "Mounting: Top / inside frame",
                                "Max size: 1800 mm x 2500 mm",
                                "Sealing: Side channels optional",
                                "Application: Residential skylights"
                            ]
                        )
                    ]
                }),
                "dgu-blinds": itemConfig({
                    title: "DGU BLINDS",
                    tagline: "Product Detail",
                    intro: "A sealed blind system integrated within double-glazed glass units, offering dust-free operation, enhanced insulation, and zero maintenance.",
                    overviewTitle: "DGU BLINDS",
                    overviewSummary: "DGU blinds are integrated inside insulated glazing units to provide clean low-maintenance shading, better insulation, and protected internal blind operation.",
                    overviewImage: "assets/img/window/01.jpg",
                    overviewPoints: ["Sealed blind system within double-glazed units", "Dust-free operation and zero maintenance", "Improved insulation and clean appearance", "Supports venetian and fabric blind formats"],
                    sourceNote: "Blinds pages are updated to keep only the three selected blind options in the same product-detail layout.",
                    types: [
                        typeSection(
                            "DGU - 01",
                            "Venetian Blinds (Inside Glass)",
                            "assets/img/window/01.jpg",
                            "An aluminium venetian blind system sealed inside a DGU configuration for adjustable light control and protected dust-free operation.",
                            [
                                "System type: Aluminium Venetian blind (inside DGU)",
                                "Glass configuration: 5 mm + 12-20 mm spacer + 5 mm",
                                "Slat size: 12 mm - 16 mm",
                                "Operation: Magnetic slider / motorized",
                                "Tilt control: Yes (angle adjustment)",
                                "Light control: Adjustable shading",
                                "Sealing: Fully sealed unit (argon optional)",
                                "Max size: 1500 mm x 2500 mm"
                            ]
                        ),
                        typeSection(
                            "DGU - 02",
                            "Roller / Pleated Blinds (Inside DGU)",
                            "assets/img/window/01.jpg",
                            "A sealed fabric blind system integrated inside double-glazed units for blackout or translucent control with zero maintenance operation.",
                            [
                                "System type: Fabric blind inside glass",
                                "Fabric: Blackout / translucent",
                                "Operation: Magnetic / motorized",
                                "Glass thickness: 20 mm - 32 mm DGU",
                                "Light control: Full blackout possible",
                                "Maintenance: Zero (dust-free sealed system)"
                            ]
                        )
                    ]
                })
            }
        }
    };

    function getCurrentProduct() {
        var categorySlug = query("category") || "windows";
        var itemSlug = query("item");
        var category = productCatalog[categorySlug] || productCatalog.windows;
        var itemMap = category.items;
        var firstKey = Object.keys(itemMap)[0];
        var item = itemMap[itemSlug] || itemMap[firstKey];

        return {
            categorySlug: productCatalog[categorySlug] ? categorySlug : "windows",
            category: category,
            item: item,
            itemSlug: itemMap[itemSlug] ? itemSlug : firstKey
        };
    }

    function setText(id, value) {
        var node = document.getElementById(id);
        if (node) {
            node.textContent = value;
        }
    }

    function setHtml(id, value) {
        var node = document.getElementById(id);
        if (node) {
            node.innerHTML = value;
        }
    }

    function setImage(id, src, alt) {
        var node = document.getElementById(id);
        if (node) {
            node.src = src;
            node.alt = alt;
        }
    }

    function renderList(id, items, iconClass) {
        setHtml(id, items.map(function (item) {
            return '<li><i class="' + iconClass + '"></i>' + item + "</li>";
        }).join(""));
    }

    function renderTypeNav(item) {
        setHtml("catalog-type-nav", item.types.map(function (type, index) {
            return '<a href="#type-section-' + index + '" class="catalog-type-chip">' + type.code + "</a>";
        }).join(""));
    }

    function renderTypeSections(item) {
        setHtml("catalog-type-sections", item.types.map(function (type, index) {
            var reverseClass = index % 2 === 0 ? " catalog-type-block-reverse" : "";
            var hasMultipleImages = type.images.length > 1;
            var slides = type.images.map(function (imageSrc, imageIndex) {
                return '<div class="catalog-gallery-slide' + (imageIndex === 0 ? " active" : "") + '">' +
                    '<img src="' + imageSrc + '" alt="' + type.title + " image " + (imageIndex + 1) + '">' +
                "</div>";
            }).join("");
            var dots = hasMultipleImages ? type.images.map(function (_, imageIndex) {
                return '<button type="button" class="catalog-gallery-dot' + (imageIndex === 0 ? " active" : "") + '" data-slide-index="' + imageIndex + '" aria-label="Show image ' + (imageIndex + 1) + '"></button>';
            }).join("") : "";
            return '' +
                '<section class="catalog-type-block' + reverseClass + '" id="type-section-' + index + '">' +
                    '<div class="catalog-type-card">' +
                        '<div class="row align-items-center g-4">' +
                            '<div class="col-lg-6">' +
                                '<div class="catalog-type-visual">' +
                                    '<span class="catalog-type-code">' + type.code + '</span>' +
                                    '<div class="catalog-gallery" data-gallery>' +
                                        '<div class="catalog-gallery-slides">' + slides + '</div>' +
                                        (hasMultipleImages ? '<div class="catalog-gallery-dots">' + dots + '</div>' : '') +
                                    '</div>' +
                                '</div>' +
                            '</div>' +
                            '<div class="col-lg-6">' +
                                '<div class="catalog-type-copy">' +
                                    '<h3>' + type.title + '</h3>' +
                                    '<p>' + type.description + '</p>' +
                                    '<ul class="catalog-spec-list">' +
                                        type.specs.map(function (spec) {
                                            return '<li><i class="far fa-check-circle"></i><span>' + spec + '</span></li>';
                                        }).join("") +
                                    '</ul>' +
                                '</div>' +
                            '</div>' +
                        '</div>' +
                    '</div>' +
                '</section>';
        }).join(""));
    }

    function initTypeGalleries() {
        document.querySelectorAll("[data-gallery]").forEach(function (gallery) {
            var slides = gallery.querySelectorAll(".catalog-gallery-slide");
            var dots = gallery.querySelectorAll(".catalog-gallery-dot");

            dots.forEach(function (dot) {
                dot.addEventListener("click", function () {
                    var nextIndex = Number(dot.getAttribute("data-slide-index"));

                    slides.forEach(function (slide, slideIndex) {
                        slide.classList.toggle("active", slideIndex === nextIndex);
                    });

                    dots.forEach(function (button, dotIndex) {
                        button.classList.toggle("active", dotIndex === nextIndex);
                    });
                });
            });
        });
    }

    function renderRelated(current) {
        var category = current.category;
        var itemSlug = current.itemSlug;
        var related = Object.keys(category.items)
            .filter(function (key) { return key !== itemSlug; })
            .slice(0, 6)
            .map(function (key) {
                return '<a href="product-detail.html?category=' + current.categorySlug + '&item=' + key + '" class="catalog-related-link">' + category.items[key].title + '<i class="far fa-arrow-right"></i></a>';
            });
        setHtml("catalog-related-links", related.join(""));
    }

    var current = getCurrentProduct();

    document.title = current.item.title + " | Windzon";

    setText("product-breadcrumb-title", current.item.title);
    setText("product-breadcrumb-current", current.item.title);

    ["product-category-page-link", "catalog-category-link"].forEach(function (linkId) {
        var categoryLink = document.getElementById(linkId);
        if (categoryLink) {
            categoryLink.href = current.category.pageUrl;
            if (linkId === "catalog-category-link") {
                categoryLink.innerHTML = "Back To " + current.category.label + '<i class="fas fa-arrow-right"></i>';
            } else {
                categoryLink.textContent = current.category.label;
            }
        }
    });

    setText("catalog-tagline", current.category.label + " " + current.item.tagline);
    setText("catalog-main-title", current.item.title);
    setText("catalog-intro", current.item.intro);
    setText("catalog-overview-title", current.item.overviewTitle);
    setText("catalog-overview-summary", current.item.overviewSummary);
    setText("catalog-cta-title", "Need support for " + current.item.title + "?");
    setText("catalog-cta-text", "Share your required size, finish, glazing, or system preference and we will guide you with the right solution for your project.");
    setText("catalog-source-note", current.item.sourceNote);
    setImage("catalog-overview-image", current.item.overviewImage, current.item.title);

    renderList("catalog-overview-points", current.item.overviewPoints, "far fa-check-circle");
    renderTypeNav(current.item);
    renderTypeSections(current.item);
    initTypeGalleries();
    renderRelated(current);
});
