import { AppLayout } from "~/layouts/App/AppLayout";
import Dossiers from "../components/Dossiers/Dossiers";
import { DossiersInterface } from "../types/dossier.types";
import { PaginationInterface } from "~/types/pagination.types";

export default function DossiersPage({
    dossiers,
    pagination,
}: Readonly<{
    dossiers: DossiersInterface[];
    pagination: PaginationInterface;
}>) {
    return (
        <AppLayout>
            <Dossiers
                dossiers={dossiers}
                pagination={pagination}
            />
        </AppLayout>
    );
}
