import { AppLayout } from "~/layouts/App/AppLayout";
import Dossiers from "../components/Dossiers/Dossiers";
import { DossiersInterface } from "../types/dossier.types";
import { MedewerkerInterface } from "~/types/medewerker.types";
import { PaginationInterface } from "~/types/pagination.types";
import { TeamInterface } from "~/types/team.types";

export default function DossiersPage({
    dossiers,
    gkaTeams,
    medewerkers,
    pagination,
}: Readonly<{
    dossiers: DossiersInterface[];
    gkaTeams: TeamInterface[],
    medewerkers: MedewerkerInterface[],
    pagination: PaginationInterface;
}>) {
    return (
        <AppLayout>
            <Dossiers
                dossiers={dossiers}
                gkaTeams={gkaTeams}
                medewerkers={medewerkers}
                pagination={pagination}
            />
        </AppLayout>
    );
}
