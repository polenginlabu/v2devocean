@component('mail::message')

<p style="text-align: center;">
    <img src="https://devocean.website/wedding/rio-ansherina/wedding-logo.png" alt="{{ $logoAlt ?? 'JP & EL Wedding Logo' }}" style="max-width: 200px; margin-bottom: 20px;">
</p>

# You're Invited to Our Wedding! 💍

**Dear {{ ucwords($name) }},**

We are delighted to invite you to celebrate our wedding day!

## 📅 **Date:** October 06, 2025
## 📍 **Venue:** [Stalla Suites Events Place QC](https://maps.app.goo.gl/Eb8TVn3Zdhg3eYbC9)

@component('mail::button', ['url' => 'https://devocean.website/wedding-invitation.ics'])
Save to Calendar 📅
@endcomponent

---

## 👗 **Wedding Dress Code Guidelines**
Ladies in modest dresses (no revealing cuts).
Gents in LONG SLEEVES & PANTS. Please follow light or pastel color tones in support of our lavender-themed wedding 💜

## 🎁 **A Note On Gifts**
As we begin our journey as husband and wife, we are grateful for your presence and love.
If you wish to bless us further, a gift in the form of cash will help us build our future home together.

Your presence means so much to us, and we can’t wait to celebrate this special day together in style!

---

## 🎨 **Wedding Motif**

<table align="center" style="text-align: center; margin-top: 20px;">
    <tr>
        <td style="padding: 10px;">
            <div style="background-color: #5b388d; width: 50px; height: 50px; border-radius: 50%; margin: auto;"></div>
            <p style="font-size: 12px; margin-top: 5px;">Violet</p>
        </td>
        <td style="padding: 10px;">
            <div style="background-color: #d9aaf6; width: 50px; height: 50px; border-radius: 50%; margin: auto;"></div>
            <p style="font-size: 12px; margin-top: 5px;">Lavender</p>
        </td>
        <td style="padding: 10px;">
            <div style="background-color: #e4e5e7; width: 50px; height: 50px; border-radius: 50%; margin: auto;"></div>
            <p style="font-size: 12px; margin-top: 5px;">Light Gray</p>
        </td>
        <td style="padding: 10px;">
            <div style="background-color: #fac6d1; width: 50px; height: 50px; border-radius: 50%; margin: auto;"></div>
            <p style="font-size: 12px; margin-top: 5px;">Light Pink</p>
        </td>
        <td style="padding: 10px;">
            <div style="background-color: #ffd9ce; width: 50px; height: 50px; border-radius: 50%; margin: auto;"></div>
            <p style="font-size: 12px; margin-top: 5px;">Peach</p>
        </td>
    </tr>
</table>

<br>
Warm regards,
<br>
Ansherina & Rio

@endcomponent
