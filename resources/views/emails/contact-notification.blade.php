<!DOCTYPE html>
<html>
<body style="margin:0;padding:0;background-color:#f4f4f5;font-family:Arial,Helvetica,sans-serif;">
    <table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="background-color:#f4f4f5;padding:32px 0;">
        <tr>
            <td align="center">
                <table role="presentation" width="520" cellpadding="0" cellspacing="0" style="background-color:#ffffff;border-radius:12px;overflow:hidden;">
                    <tr>
                        <td style="background-color:#1e3a5f;padding:24px 32px;">
                            <span style="color:#ffffff;font-size:18px;font-weight:bold;">New Contact Form Message</span>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:32px;color:#1b1b18;">
                            <p style="font-size:14px;margin:0 0 8px;"><strong>Name:</strong> {{ $name }}</p>
                            <p style="font-size:14px;margin:0 0 8px;"><strong>Email:</strong> {{ $email }}</p>
                            @if(!empty($phone))
                                <p style="font-size:14px;margin:0 0 8px;"><strong>Phone / WhatsApp:</strong> {{ $phone }}</p>
                            @endif
                            <p style="font-size:14px;margin:0 0 16px;"><strong>Subject:</strong> {{ $subject }}</p>
                            <p style="font-size:14px;margin:0 0 8px;"><strong>Operational Context / Message:</strong></p>
                            <p style="font-size:14px;line-height:1.6;color:#444;white-space:pre-wrap;margin:0;">{{ $message }}</p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
