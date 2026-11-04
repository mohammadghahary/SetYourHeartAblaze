---
name: Luminous Sanctuary
colors:
  surface: '#e2fffe'
  surface-dim: '#c0e0df'
  surface-bright: '#e2fffe'
  surface-container-lowest: '#ffffff'
  surface-container-low: '#d9faf9'
  surface-container: '#d4f4f3'
  surface-container-high: '#ceeeee'
  surface-container-highest: '#c8e9e8'
  on-surface: '#002020'
  on-surface-variant: '#3e4949'
  inverse-surface: '#173535'
  inverse-on-surface: '#d6f7f6'
  outline: '#6e7979'
  outline-variant: '#bdc9c8'
  surface-tint: '#006a6a'
  primary: '#006767'
  on-primary: '#ffffff'
  primary-container: '#008282'
  on-primary-container: '#f3fffe'
  inverse-primary: '#73d6d6'
  secondary: '#356855'
  on-secondary: '#ffffff'
  secondary-container: '#b5ebd3'
  on-secondary-container: '#396c59'
  tertiary: '#8f490e'
  on-tertiary: '#ffffff'
  tertiary-container: '#ad6126'
  on-tertiary-container: '#fffbff'
  error: '#ba1a1a'
  on-error: '#ffffff'
  error-container: '#ffdad6'
  on-error-container: '#93000a'
  primary-fixed: '#90f3f2'
  primary-fixed-dim: '#73d6d6'
  on-primary-fixed: '#002020'
  on-primary-fixed-variant: '#004f4f'
  secondary-fixed: '#b8eed6'
  secondary-fixed-dim: '#9cd2ba'
  on-secondary-fixed: '#002116'
  on-secondary-fixed-variant: '#1b4f3e'
  tertiary-fixed: '#ffdcc6'
  tertiary-fixed-dim: '#ffb786'
  on-tertiary-fixed: '#311400'
  on-tertiary-fixed-variant: '#723600'
  background: '#e2fffe'
  on-background: '#002020'
  surface-variant: '#c8e9e8'
typography:
  display-lg:
    fontFamily: Plus Jakarta Sans
    fontSize: 52px
    fontWeight: '700'
    lineHeight: 68px
  display-lg-mobile:
    fontFamily: Plus Jakarta Sans
    fontSize: 34px
    fontWeight: '700'
    lineHeight: 44px
  headline-xl:
    fontFamily: Plus Jakarta Sans
    fontSize: 38px
    fontWeight: '700'
    lineHeight: 48px
  headline-xl-mobile:
    fontFamily: Plus Jakarta Sans
    fontSize: 28px
    fontWeight: '700'
    lineHeight: 36px
  headline-lg:
    fontFamily: Plus Jakarta Sans
    fontSize: 28px
    fontWeight: '600'
    lineHeight: 38px
  headline-md:
    fontFamily: Plus Jakarta Sans
    fontSize: 22px
    fontWeight: '600'
    lineHeight: 30px
  body-lg:
    fontFamily: Plus Jakarta Sans
    fontSize: 18px
    fontWeight: '400'
    lineHeight: 28px
  body-md:
    fontFamily: Plus Jakarta Sans
    fontSize: 15px
    fontWeight: '400'
    lineHeight: 24px
  body-sm:
    fontFamily: Plus Jakarta Sans
    fontSize: 13px
    fontWeight: '400'
    lineHeight: 20px
  label-lg:
    fontFamily: Plus Jakarta Sans
    fontSize: 15px
    fontWeight: '600'
    lineHeight: 22px
  label-md:
    fontFamily: Plus Jakarta Sans
    fontSize: 13px
    fontWeight: '600'
    lineHeight: 18px
  label-sm:
    fontFamily: Plus Jakarta Sans
    fontSize: 11px
    fontWeight: '500'
    lineHeight: 16px
rounded:
  sm: 0.25rem
  DEFAULT: 0.5rem
  md: 0.75rem
  lg: 1rem
  xl: 1.5rem
  full: 9999px
spacing:
  gutter: 1.5rem
  gutter-mobile: 1rem
  margin: 3rem
  margin-mobile: 1.25rem
  space-xs: 0.375rem
  space-sm: 0.75rem
  space-md: 1.25rem
  space-lg: 2rem
  space-xl: 3rem
---

## Brand & Style

This design system serves high-trust international medical tourism, specifically calibrated for Arabic and Persian patients and their families seeking specialized care. The identity balances clinical rigor, reassuring hospitality, and regional warmth. The visual aesthetic is an ultra-clean, crystalline Light Mode Glassmorphism with an ambient pearl luminosity—eschewing cold hospital sterility in favor of serene, restorative luxury.

The experience evokes safety, elite clinical mastery, transparent guidance, and hospitable comfort. Surfaces are frosted glass sheets floating over organic, soft-tinted ambient orbs of light. Micro-interactions are gentle and fluid, reinforcing physical calm for patients navigating critical medical decisions.

## Colors

The palette grounds high-credibility surgical excellence with regional warmth and luminous wellness accents:

- **Deep Teal (`#008585`)**: Primary brand anchor used for key navigational headers, primary badges, high-priority icons, and structural focus elements. Conveys clinical precision and sanctuary.
- **Soft Sage (`#74A892`)**: Secondary calming tone, utilized for supportive data structures, success and verification indicators, and secondary accent backdrops.
- **Warm Terracotta (`#CC7A3D`)**: Tertiary conversion accelerator for booking consultations, doctor reservations, and urgent assistance cues.
- **Rust (`#C45335`)**: Hover and active state for terracotta controls, ensuring crisp visual feedback.
- **Neutral Deep Teal / Charcoal (`#0F2E2E`)**: High-contrast, optical-grade primary typography color providing optimal legibility across frosted light surfaces.
- **Subtle Supporting Neutrals**: `#466363` for secondary descriptive text, `#8FA3A3` for inactive states, and `#E6EEEE` for glass container borders.
- **Canvas & Ambient Glow**: Pure pearl background base (`#F8FAFC`) layered with diffused ambient orbs in Pale Saffron (`#FBF2C4`) and Soft Sage (`#74A892`) at 15–25% opacity to illuminate the frosted glass panels from beneath.

## Typography

The type system prioritizes fluid cross-script harmony between RTL (Arabic and Persian) and LTR (English / International) presentations. Plus Jakarta Sans handles Western numerals and Latin medical terms, paired with regional fonts (Vazirmatn / Cairo) via font-family fallbacks (`"Vazirmatn", "Cairo", "Plus Jakarta Sans", sans-serif`).

- **Leading & Rhythm**: Arabic and Persian scripts require taller line-height metrics (+10% to +15% over standard Latin proportions) to prevent diacritic clipping in specialized medical terms.
- **Letter Spacing**: Letter spacing remains `0` or slightly positive for Latin, while strictly avoiding negative tracking on RTL scripts to preserve cursive glyph connections.
- **Weight Strategy**: Headings employ semi-bold (600) and bold (700) weights to establish clean hierarchy against translucent glass containers. Body copy is set at regular (400) weight with high optical contrast against white backdrops.

## Layout & Spacing

The layout model is anchored on an RTL-first responsive grid system designed to support seamless bi-directional flow:

- **RTL Geometry**: Reading axes start strictly on the physical right. Navigation, back-buttons, card headers, and progressive form flows step right-to-left. Numeric hospital rankings and phone formats retain their required logical directionality.
- **Desktop Grid**: 12-column fluid grid, maximum container width of `1360px`, `3rem` section margins, and `1.5rem` gutters.
- **Tablet Grid (768px – 1024px)**: 8-column grid with `2rem` margins and `1.25rem` gutters.
- **Mobile Grid (< 768px)**: 4-column grid with `1.25rem` margins and `1rem` gutters. Nested components collapse vertically into single stacked cards.
- **Spatial Rhythm**: Generous vertical whitespace (`space-xl` between logical clinical domains) gives patient users a stress-free reading environment. Internal glass containers maintain consistent inner padding (`space-md` on mobile, `space-lg` on desktop).

## Elevation & Depth

Visual hierarchy is articulated through luminous glassmorphism and subtle tinted ambient light rather than traditional opaque drop shadows:

- **Surface Treatment**: The base glass surface uses `rgba(255, 255, 255, 0.78)` backed by a `backdrop-filter: blur(20px) saturate(180%)`.
- **Ghost Outlines**: Every glass container is bounded by a crisp `1px` border with a subtle gradient: `linear-gradient(135deg, rgba(255, 255, 255, 0.9) 0%, rgba(255, 255, 255, 0.3) 100%)`.
- **Level 1 (Cards, Doctor Profiles, Lists)**: `0 4px 20px -2px rgba(0, 133, 133, 0.05), 0 2px 6px rgba(15, 46, 46, 0.03)`.
- **Level 2 (Interactive Floating Panels, Filters, Sticky Booking Bars)**: `rgba(255, 255, 255, 0.88)` fill, `backdrop-filter: blur(24px)`, shadow: `0 12px 32px -4px rgba(0, 133, 133, 0.09), 0 4px 12px rgba(15, 46, 46, 0.04)`.
- **Level 3 (Modal Sheets, Procedure Booking Overlays)**: `rgba(255, 255, 255, 0.94)` fill, `backdrop-filter: blur(32px)`, shadow: `0 24px 60px -8px rgba(0, 133, 133, 0.14), 0 8px 24px rgba(15, 46, 46, 0.06)`.
- **Ambient Floor**: Diffused radial gradient spots (`#FBF2C4` and `#74A892`) set behind the glass layer generate an organic, sunlit pearl feel that softly illuminates card boundaries.

## Shapes

The design system employs a refined modern curvature (Level 2), reinforcing safety, organic healing, and contemporary architectural elegance:

- Standard structural elements (cards, form surfaces, clinical overviews) utilize `0.75rem` to `1rem` corner rounding.
- High-visibility interactive elements (buttons, filter chips, search input capsules, status pills) use full-pill styling (`9999px`) to create clear tactile affordances against the geometric grid.
- Modal dialogues and master booking drawers feature soft `1.5rem` (`rounded-xl`) perimeter contours.

## Components

### Buttons
- **Primary CTA (Terracotta Action)**: Filled `#CC7A3D` with pure white text, pill-shaped (`9999px`), padding `12px 24px`. Subtle warm shadow: `0 6px 18px rgba(204, 122, 61, 0.3)`. Hover transitions smoothly to Rust `#C45335`.
- **Secondary (Teal Clinical)**: Deep Teal `#008585` solid fill with white text, or frosted glass surface (`rgba(0, 133, 133, 0.08)`) with `#008585` label and a `1px solid rgba(0, 133, 133, 0.2)` border.
- **RTL Icon Placement**: Action arrows and progression chevrons point physically left for forward actions (`transform: scaleX(-1)` in RTL contexts).

### Input Fields & Search Bars
- Glass capsule containers using `rgba(255, 255, 255, 0.85)` fill, `1px solid rgba(116, 168, 146, 0.35)` border, and `12px 20px` internal padding.
- Text aligns right-to-left by default.
- Active focus state: border shifts to solid `#008585` with an outer soft glow ring `0 0 0 4px rgba(0, 133, 133, 0.12)`.

### Cards (Doctor & Procedure Showcase)
- Composed of frosted glass (`rgba(255, 255, 255, 0.78)`), `1px` translucent white border, and soft ambient drop shadows.
- Layout: Doctor avatar / hospital thumbnail positioned on the right edge in RTL mode, with credentials, translated specialty tags, and pricing transparency anchored on the left.
- Interactive hover: Elevation lifts card `-3px` with an enriched teal ambient shadow.

### Chips & Filter Pills
- Pill-shaped (`9999px`), `8px 16px` padding, font weight 600.
- Unselected: Frosted white glass with `#466363` text and `1px solid rgba(255, 255, 255, 0.6)`.
- Selected: Deep Teal `#008585` fill with white text and an active check icon situated on the right side of the text in RTL.

### Checkboxes & Radio Controls
- Circular radio controls and softly curved square checkboxes (`6px` radius).
- Unchecked: Translucent pearl background with `#74A892` border.
- Checked: Deep Teal `#008585` fill with a crisp white checkmark/dot.

### Medical Tourism Domain Additions
- **Language & Currency Toggle**: Floating glass capsule at top-right (desktop) displaying Persian/Arabic script switchers alongside dual currency estimators (USD / IRR / AED).
- **VIP Concierge Badge**: Shimmering Soft Sage and Pearl glass pill indicating visa assistance, private airport transfer, and bilingual medical interpreter inclusion.
- **Accreditation Glass Strip**: A horizontal frosted ticker displaying international JCI hospital accreditations and Ministry of Health verifications with high contrast monochrome-teal logos.