import PrimaryButton from "@/Components/PrimaryButton";
import GuestLayout from "@/Layouts/GuestLayout";
import { Head, Link, useForm } from "@inertiajs/react";

export default function VerifyEmail({ status }) {
    const { post, processing } = useForm({});

    const submit = (e) => {
        e.preventDefault();

        post(route("verification.send"));
    };

    return (
        <GuestLayout>
            <Head title="Email Verification" />

            <div className="mb-4 text-sm text-gray-600">
                Dzięki za rejestrację! Zanim zaczniemy, sprawdź swój email w
                celu weryfikacji. Przesłaliśmy Ci email z linkiem
                weryfikacyjnym. Aby zakończyć proces rejestracji, proszę kliknąć
                w link. Jeśli nie otrzymałeś emaila, możesz ponownie wysłać link
                weryfikacyjny klikając poniżej.
            </div>

            {status === "verification-link-sent" && (
                <div className="mb-4 text-sm font-medium text-green-600">
                    Nowy link weryfikacyjny został wysłany na Twój adres email.
                </div>
            )}

            <form onSubmit={submit}>
                <div className="flex items-center justify-between mt-4">
                    <PrimaryButton disabled={processing}>
                        Wyślij ponownie email weryfikacyjny
                    </PrimaryButton>

                    <Link
                        href={route("logout")}
                        method="post"
                        as="button"
                        className="text-sm text-gray-600 underline rounded-md hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    >
                        Wyloguj
                    </Link>
                </div>
            </form>
        </GuestLayout>
    );
}
