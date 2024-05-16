import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout";
import { Head, Link, router, usePage } from "@inertiajs/react";
import Message from "../Components/Message";
import PrimaryButton from "../Components/PrimaryButton";

export default function Dashboard({ auth }) {
    const { applications, sort } = usePage().props;

    const handleSortChange = () => {
        const newSort = sort === "desc" ? "asc" : "desc";
        router.get(
            route("dashboard"),
            { sort: newSort },
            {
                preserveState: true,
            }
        );
    };

    return (
        <AuthenticatedLayout
            user={auth.user}
            header={
                <h2 className="text-xl font-semibold leading-tight text-gray-800">
                    Lista zgłoszeń
                </h2>
            }
        >
            <Head title="Lista zgłoszeń" />

            <div className="py-12">
                <div className="mx-auto max-w-7xl sm:px-6 lg:px-8">
                    <div className="p-8 overflow-hidden bg-white shadow-sm sm:rounded-lg">
                        <div className="flex flex-col">
                            <h1 className="p-4 text-2xl font-extrabold text-center">
                                Zgłoszenia do szkoły młodych małżeństw
                            </h1>
                            <PrimaryButton
                                onClick={handleSortChange}
                                className="w-full py-4 font-bold md:w-fit"
                            >
                                Sortuj{" "}
                                {sort === "desc"
                                    ? "od najstarszych"
                                    : "od najnowszych"}
                            </PrimaryButton>
                            <div className="flex flex-col gap-6 py-4">
                                {applications.data.map((application) => (
                                    <div
                                        key={application.id}
                                        className="flex flex-col items-start justify-around gap-4 px-2 py-8 rounded-lg shadow-md md:flex-row bg-slate-100"
                                    >
                                        <div className="flex flex-col gap-2">
                                            <div className="flex flex-col gap-2">
                                                <h3 className="font-bold uppercase">
                                                    Imię małżonki
                                                </h3>
                                                <p>{application.wife_name}</p>
                                            </div>
                                            <div className="flex flex-col gap-2">
                                                <h3 className="font-bold uppercase">
                                                    Imię małżonka
                                                </h3>
                                                <p>
                                                    {application.husband_name}
                                                </p>
                                            </div>
                                            <div className="flex flex-col gap-2">
                                                <h3 className="font-bold uppercase">
                                                    Wiek małżeństwa
                                                </h3>
                                                <p>{application.age}</p>
                                            </div>
                                            <div className="flex flex-col gap-2">
                                                <h3 className="font-bold uppercase">
                                                    Nazwisko
                                                </h3>
                                                <p>{application.surname}</p>
                                            </div>
                                        </div>
                                        <div className="flex flex-col gap-2">
                                            <div className="flex flex-col gap-2">
                                                <h3 className="font-bold uppercase">
                                                    Miasto
                                                </h3>
                                                <p>{application.city}</p>
                                            </div>
                                            <div className="flex flex-col gap-2">
                                                <h3 className="font-bold uppercase">
                                                    Email
                                                </h3>
                                                <p>{application.email}</p>
                                            </div>
                                            <div className="flex flex-col gap-2">
                                                <Message
                                                    message={
                                                        application.message
                                                    }
                                                />
                                            </div>
                                            <p className="text-sm">
                                                {new Date(
                                                    application.created_at
                                                ).toLocaleString()}
                                            </p>
                                        </div>
                                    </div>
                                ))}
                            </div>
                            <div className="flex items-center justify-center w-full gap-4">
                                {applications.links.map((link, index) => (
                                    <Link
                                        key={index}
                                        href={link.url}
                                        dangerouslySetInnerHTML={{
                                            __html: link.label,
                                        }}
                                    />
                                ))}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </AuthenticatedLayout>
    );
}
